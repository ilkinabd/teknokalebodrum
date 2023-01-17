<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    public function list($category): Factory|View|Application
    {
        $categories      = Category::with('children')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug'])->toArray();
        $currentCategory = Category::with('products')->where('slug', $category)->first(['id', 'parent_id', 'title', 'slug'])->toArray();
        return view('pages.products.list', [
            'categories'      => $categories,
            'currentCategory' => $currentCategory
        ]);
    }

    public function detail($category, $product): Factory|View|Application
    {
        $categories      = Category::with('children')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug'])->toArray();
        $currentCategory = Category::with('products')->where('slug', $category)->first(['id', 'parent_id', 'title', 'slug'])->toArray();
        $product         = Product::where('slug', $product)->first()->toArray();
        return view('pages.products.detail', [
            'categories'      => $categories,
            'currentCategory' => $currentCategory,
            'product'         => $product
        ]);
    }
}