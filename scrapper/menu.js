const puppeteer = require('puppeteer');
const cheerio = require('cheerio');
const fs = require('fs');
const basePath = 'https://www.kalekilit.com.tr';

async function getChildren(browser, link) {
    const selector = '.items'
    const childrenArray = []
    const $ = await goToPage(browser, link, selector)
    const hasChildren = $('.contact-btn').length === 0

    const promises = []
    $(selector).each((index, item) => {
        promises.push(new Promise(async (resolve, reject) => {
            const image = $(item).find('img')
            const anchor = $(item).find('.list-all')
            const title1 = $(item).find('.product-title>a:first-child')
            const title2 = $(item).find('.product-title>a:nth-child(2)')
            let text = $(title1).text()
            if (title1.text().trim() === '') {
                text = $(title2).text()
            } else if (title2.length) {
                text = $(title1).text() + '<br/>' + $(title2).text()
            }

            if (hasChildren) {
                childrenArray.push({
                    image: basePath + $(image).attr('src'),
                    link: basePath + $(anchor).attr('href'),
                    text: text,
                    children: await getChildren(browser, basePath + $(anchor).attr('href'))
                })
            } else {
                const images = []
                const downloads = []
                $('.thumb-image img').each((index, item) => {
                    images.push(basePath + $(item).attr('src'))
                })

                $('.prg-download_link > a').each((index, item) => {
                    downloads.push({
                        name: $(item).text(),
                        link: basePath + $(item).attr('href')
                    })
                })

                childrenArray.push({
                    images,
                    text: $('h1').text(),
                    downloads,
                    children: [],
                    description: $('.technical').html()
                })
            }
            resolve(1)
        }))
    })
    await Promise.all(promises)
    return childrenArray
}


async function goToPage(browser, link, selector) {
    console.log(`Going to page : ${link}`)
    const page = await browser.newPage();
    await page.setDefaultNavigationTimeout(0);
    await page.goto(link)
    await page.waitForSelector(selector);
    const content = await page.content()
    const $ = cheerio.load(content)
    await page.close()
    return $
}

(async () => {
    try {
        const categoryMap = [];
        const baseLink = basePath + '/tr/kale-kilit-urunler'
        const browser = await puppeteer.launch({headless: false});
        const selector = '.view-content.active-menu > .active-menu > .views_tree_parent.views_tree_collapsed > a';
        let $ = await goToPage(browser, baseLink, selector)
        const promises = []
        $(selector).each((index, item) => {
            // if it has children then recursive function
            if (index !== 0) {
                promises.push(new Promise(async (resolve, reject) => {
                    const link = basePath + $(item).attr('href')
                    categoryMap.push({
                        image: null,
                        link: basePath + $(item).attr('href'),
                        text: $(item).text(),
                        children: await getChildren(browser, link)
                    })
                    resolve(1)
                }))
            }
        });
        await Promise.all(promises)
        fs.writeFile('menu.json', JSON.stringify(categoryMap, null, 2), (err) => {
            if (err) throw err;
            console.log('Data written to file');
        });
        // await browser.close();
    } catch (error) {
        console.log(error);
    }
})();