<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;

class ServicesController extends Controller
{
    public function detail($slug)
    {
        $products = Product::with("category")->where('service_slug', $slug)->get();
        $service  = Service::with('items')->where("slug", $slug)
            ->where('is_active', 1)
            ->first();
        if (!$service) {
            return abort(404);
        }
        return view("pages.services.detail", [
            "products" => $products,
            'service'  => $service,
        ]);
    }

    public function list()
    {
        $services = Service::all()->toArray();
        return view('pages.services.list', [
            'services' => $services
        ]);
    }
}