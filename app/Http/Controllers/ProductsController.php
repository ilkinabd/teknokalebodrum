<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    public function index($slug): Factory|View|Application
    {
        $categories      = Category::with('children')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug'])->toArray();
        $currentCategory = Category::with('products')->where('slug', $slug)->first(['id', 'parent_id', 'title', 'slug'])->toArray();
        return view('pages.products', [
            'categories'      => $categories,
            'currentCategory' => $currentCategory
        ]);
    }
}