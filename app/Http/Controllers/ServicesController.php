<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;

class ServicesController extends Controller
{
    public function detail($slug)
    {
        $slugs = [
            'kale-kilit',
            'kale-celik-kapi',
            'kale-celik-kasa'
        ];
        if (!in_array($slug, $slugs)) {
            return abort(404);
        }
        $products = Product::with("category")->where('service_slug', $slug)->get()->toArray();
        return view("pages.services.$slug", [
            "products" => $products
        ]);
    }

    public function list()
    {
        $services   = Service::all()->toArray();
        return view('pages.services.list', [
            'services' => $services
        ]);
    }
}