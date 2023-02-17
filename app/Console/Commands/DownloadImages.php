<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DownloadImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download images and saves to public path';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $products = Product::all();
        $products = Product::whereNull("local_downloads")->get();
        foreach ($products as $product) {
            echo "Product is $product->title\n";
            if ($product->downloads) {
                $downloads      = json_decode($product->downloads, true);
                $localDownloads = [];
                foreach ($downloads as $download) {
                    $path = str_replace("https://www.kalekilit.com.tr/sites/kalekilit.com.tr/", "", $download['link']);
                    echo "Writing file {$download['link']} to $path\n";
                    Storage::disk('public')->put($path, file_get_contents($download['link']));
                    $localDownloads[] = [
                        'name' => $download['name'],
                        'link' => $path
                    ];
                }
                $product->local_downloads = json_encode($localDownloads);
                $product->save();
            }
        }
        return Command::SUCCESS;
    }
}
