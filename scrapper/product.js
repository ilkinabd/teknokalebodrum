const cheerio = require('cheerio');
const fs = require('fs');
const menu = require('./menu.json');
const { Cluster } = require("puppeteer-cluster");

(async () => {
    const cluster = await Cluster.launch({
        concurrency: Cluster.CONCURRENCY_PAGE,
        maxConcurrency: 100,
        monitor: true,
        puppeteerOptions: {
            headless: false,
            defaultViewport: false,
            userDataDir: "./tmp",
        },
    });

    cluster.on("taskerror", (err, data) => {
        console.log(`Error crawling ${data}: ${err.message}`);
    });

    await cluster.task(async ({ page, data: url }) => {
        const selector = '.items';
        await page.goto(url);
        await page.waitForSelector(selector)
        const content = await page.content()
        const $ = cheerio.load(content)
        $('.items > .list-all').each(async (index, item) => {
            // if it has children then recursive function
            console.log($(item).text())
        });
    });

    for (const url of menu) {
        await cluster.queue(url.link);
    }

    await cluster.idle();
    await cluster.close();
})();