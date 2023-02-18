<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list($category): Factory|View|Application
    {
        /** @var Category[] $categories */
        $categories      = Category::with('children')->with('translations')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug']);
        $currentCategory = Category::with('products')->where('slug', $category)->first(['id', 'parent_id', 'title', 'slug']);
        return view('pages.products.list', [
            'categories'      => $categories,
            'currentCategory' => $currentCategory
        ]);
    }

    public function detail($category, $product): Factory|View|Application
    {
        $categories      = Category::with('children')->with('translations')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug']);
        $currentCategory = Category::with('products')->with('translations')->where('slug', $category)->first(['id', 'parent_id', 'title', 'slug']);
        $product         = Product::with('translations')->where('slug', $product)->first();
        return view('pages.products.detail', [
            'categories'      => $categories,
            'currentCategory' => $currentCategory,
            'product'         => $product
        ]);
    }

    public function search(Request $request): Factory|View|Application
    {
        $request->validate([
            'q' => 'required|min:3|max:255',
        ]);
        $categories = Category::with('children')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug'])->toArray();
        $products   = Product::with('category')
            ->orWhere('title', 'LIKE', '%' . $request->input('q') . '%')
            ->orWhere('product_code', 'LIKE', '%' . $request->input('q') . '%')
            ->simplePaginate(10)->withQueryString();

        return view('pages.products.search', [
            'products'   => $products,
            'value'      => $request->input('q'),
            'categories' => $categories
        ]);
    }

}