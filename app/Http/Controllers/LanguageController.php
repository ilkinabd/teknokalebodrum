<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class LanguageController
{
    public function change($lang)
    {
        $allowed = [
            'tr',
            'fr',
            'ru',
            'en',
            'de'
        ];
        if (in_array($lang, $allowed)) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}