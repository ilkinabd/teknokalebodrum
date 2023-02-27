<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;

class ServicesController extends Controller
{
    public function detail($slug)
    {
        $products = Product::withTranslations()
            ->with("category")
            ->where('service_slug', $slug)
            ->get();
        $service  = Service::withTranslations()
            ->with('items')
            ->whereTranslation("slug", '=', $slug)
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
        return view('pages.services.list');
    }
}