<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function home(): Factory|View|Application
    {
        $pageSlider = Slider::where('page', '=','home')->first(['slides'])->toArray();
        $slides     = json_decode($pageSlider['slides'], true);
        return view('pages.home', [
            'slides' => $slides
        ]);
    }
}