<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function home(): Factory|View|Application
    {
        $pageSlider = Slider::where('page', '=', 'home')->first(['slides'])->toArray();
        $services   = Service::all()->toArray();
        $slides     = json_decode($pageSlider['slides'], true);
        return view('pages.home', [
            'slides'   => $slides,
            'services' => $services
        ]);
    }

    public function contact(): Factory|View|Application
    {
        return view('pages.contact', [
        ]);
    }
}