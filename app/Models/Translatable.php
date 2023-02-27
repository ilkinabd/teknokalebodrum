<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;

trait Translatable
{

    public function translations()
    {
        return $this->hasMany(Translation::class, 'related_id')
            ->where('related_table', '=', $this->table);
    }

    public function scopeWithTranslations(Builder $query)
    {
        return $query->with('translations');
    }

    public function scopeWhereTranslation(Builder $query, $column, $operator, $value)
    {
        return $query->whereIn(
            'id',
            Translation::where('related_table', $this->table)
                ->where('related_column', $column)
                ->where('value', $operator, $value)
                ->where('lang_code', App::getLocale())
                ->pluck('related_id')
        )->orWhere($column, $operator, $value);
    }

    public function getTranslatedAttribute($column)
    {
        if (!$this->relationLoaded('translations')) {
            $this->load('translations');
        }
        $translation = $this->getRelation('translations')
            ->where('lang_code', '=', App::getLocale())
            ->where('related_column', '=', $column)->first();
        if ($translation) {
            return $translation->value;
        }
        return $this->{$column};
    }
}