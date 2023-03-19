<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Translation;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translate:table {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Translate tables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableName = $this->argument("table");
        switch ($tableName) {
            case "products":
                $this->translateProducts();
                break;
            case "categories":
                $this->translateCategories();
                break;
            case "services":
                $this->translateServices();
                break;
            case "service_items":
                $this->translateServiceItems();
                break;
            default:
                echo "could not translate $tableName\n";
                return Command::FAILURE;
        }
        return Command::SUCCESS;
    }

    private function translateProducts()
    {
        $languages = Language::all()->toArray();
        Product::chunk(50, function ($products) use ($languages) {
            $translations = [];
            foreach ($products as $product) {
                foreach ($languages as $language) {
                    if ($language['code'] !== 'tr') {
                        $value = GoogleTranslate::trans($product->title, $language['code'], 'tr');
                        echo "translating product[{$product->id}]:title to {$language['code']} $product->title | $value\n";
                        $translations[] = [
                            'related_id'     => $product->id,
                            'related_column' => 'title',
                            'related_table'  => 'products',
                            'lang_code'      => $language['code'],
                            'value'          => $value
                        ];
                        if ($product->description) {
                            $value = GoogleTranslate::trans($product->description, $language['code'], 'tr');
                            echo "translating product[{$product->id}]:description $product->description | $value\n";
                            $translations[] = [
                                'related_id'     => $product->id,
                                'related_column' => 'description',
                                'related_table'  => 'products',
                                'lang_code'      => $language['code'],
                                'value'          => $value
                            ];
                        }
                    }
                }
            }
            Translation::insert($translations);
        });
    }

    private function translateCategories()
    {
        $languages = Language::all()->toArray();
        Category::chunk(50, function ($categories) use ($languages) {
            $translations = [];
            foreach ($categories as $category) {
                foreach ($languages as $language) {
                    if ($language['code'] !== 'tr') {
                        $value = GoogleTranslate::trans($category->title, $language['code'], 'tr');
                        echo "translating category[{$category->id}]:title to {$language['code']} $category->title | $value\n";
                        $translations[] = [
                            'related_id'     => $category->id,
                            'related_column' => 'title',
                            'related_table'  => 'categories',
                            'lang_code'      => $language['code'],
                            'value'          => $value
                        ];
                    }
                }
            }
            Translation::insert($translations);
        });
    }

    private function translateServices()
    {
        $languages = Language::all()->toArray();
        Service::chunk(50, function ($services) use ($languages) {
            $translations = [];
            foreach ($services as $service) {
                foreach ($languages as $language) {
                    if ($language['code'] !== 'tr') {
                        $value = GoogleTranslate::trans($service->slug, $language['code'], 'tr');
                        echo "translating service[{$service->id}]:slug to {$language['code']} $service->slug | " . Str::slug($value) . "\n";
                        $translations[] = [
                            'related_id'     => $service->id,
                            'related_column' => 'slug',
                            'related_table'  => 'services',
                            'lang_code'      => $language['code'],
                            'value'          => Str::slug($value)
                        ];
                        $value = GoogleTranslate::trans($service->title, $language['code'], 'tr');
                        echo "translating service[{$service->id}]:title to {$language['code']} $service->title | $value\n";
                        $translations[] = [
                            'related_id'     => $service->id,
                            'related_column' => 'title',
                            'related_table'  => 'services',
                            'lang_code'      => $language['code'],
                            'value'          => $value
                        ];
                        $value = GoogleTranslate::trans($service->menu_title, $language['code'], 'tr');
                        echo "translating service[{$service->id}]:menu_title to {$language['code']} $service->menu_title | $value\n";
                        $translations[] = [
                            'related_id'     => $service->id,
                            'related_column' => 'menu_title',
                            'related_table'  => 'services',
                            'lang_code'      => $language['code'],
                            'value'          => $value
                        ];
                        if ($service->intro_text) {
                            $value = GoogleTranslate::trans($service->intro_text, $language['code'], 'tr');
                            echo "translating service[{$service->id}]:intro_text to {$language['code']} $service->intro_text | $value\n";
                            $translations[] = [
                                'related_id'     => $service->id,
                                'related_column' => 'intro_text',
                                'related_table'  => 'services',
                                'lang_code'      => $language['code'],
                                'value'          => $value
                            ];
                        }
                        if ($service->additional_text) {
                            $value = GoogleTranslate::trans($service->additional_text, $language['code'], 'tr');
                            echo "translating service[{$service->id}]:additional_text to {$language['code']} $service->additional_text | $value\n";
                            $translations[] = [
                                'related_id'     => $service->id,
                                'related_column' => 'additional_text',
                                'related_table'  => 'services',
                                'lang_code'      => $language['code'],
                                'value'          => $value
                            ];
                        }
                        if ($service->seo_title) {
                            $value = GoogleTranslate::trans($service->seo_title, $language['code'], 'tr');
                            echo "translating service[{$service->id}]:seo_title to {$language['code']} $service->seo_title | $value\n";
                            $translations[] = [
                                'related_id'     => $service->id,
                                'related_column' => 'seo_title',
                                'related_table'  => 'services',
                                'lang_code'      => $language['code'],
                                'value'          => $value
                            ];
                        }
                    }
                }
            }
            Translation::insert($translations);
        });
    }

    private function translateServiceItems()
    {
        $languages = Language::all()->toArray();
        ServiceItem::chunk(50, function ($serviceItems) use ($languages) {
            $translations = [];
            foreach ($serviceItems as $serviceItem) {
                foreach ($languages as $language) {
                    if ($language['code'] !== 'tr') {
                        $value = GoogleTranslate::trans($serviceItem->title, $language['code'], 'tr');
                        echo "translating service item[$serviceItem->id]:title to {$language['code']} $serviceItem->title | $value\n";
                        $translations[] = [
                            'related_id'     => $serviceItem->id,
                            'related_column' => 'title',
                            'related_table'  => 'service_items',
                            'lang_code'      => $language['code'],
                            'value'          => $value
                        ];
                    }
                }
            }
            Translation::insert($translations);
        });
    }
}
