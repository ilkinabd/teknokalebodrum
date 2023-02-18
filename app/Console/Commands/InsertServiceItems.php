<?php

namespace App\Console\Commands;

use App\Models\Service;
use App\Models\ServiceItem;
use Illuminate\Console\Command;

class InsertServiceItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:service_items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /** @var Service[] $services */
        $services = Service::all();

        foreach ($services as $service) {
            echo "Service is $service->title\n";
            if ($service->list) {
                $serviceItems = json_decode($service->list, true);
                foreach ($serviceItems as $item) {
                    echo "Saving service item {$item['title']}\n";
                    $serviceItem             = new ServiceItem();
                    $serviceItem->title      = $item['title'];
                    $serviceItem->icon       = $item['icon'];
                    $serviceItem->service_id = $service->id;
                    $serviceItem->save();
                }
            }
        }
        return Command::SUCCESS;
    }
}
