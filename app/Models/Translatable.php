<?php

namespace App\Models;

use Illuminate\Support\Facades\App;

trait Translatable
{

    public function translations()
    {
        return $this->hasMany(Translation::class, 'related_id')
            ->where('related_table', '=', $this->table);
    }

    public function getTranslatedAttribute($column)
    {
        $translation = $this->translations
                ->where('lang_code', '=', App::getLocale())
                ->where('related_column', '=', $column)->first();
        if ($translation) {
            return $translation->value;
        }
        return $this->{$column};
    }
}