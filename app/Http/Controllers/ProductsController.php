<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    public function index($slug): Factory|View|Application
    {
        $categories = Category::with('childrenRecursive')->whereNull('parent_id')->get(['id', 'parent_id', 'title', 'slug'])->toArray();
        // dd($categories);
        return view('pages.products', [
            'categories' => $categories
        ]);
    }
}