<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class Category extends Model implements LocalizedUrlRoutable
{
    use Translatable;

    protected $table   = 'categories';
    protected $appends = ['descendants'];

    private $descendants = [];

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->subcategories()->with('children')->withTranslations();
    }

    public function hasChildren()
    {
        if ($this->children->count()) {
            return true;
        }

        return false;
    }

    public function findDescendants(Category $category)
    {
        $this->descendants[] = $category->id;

        if ($category->hasChildren()) {
            foreach ($category->children as $child) {
                $this->findDescendants($child);
            }
        }
    }

    public function getDescendants(Category $category)
    {
        $this->findDescendants($category);
        return $this->descendants;
    }

    public function getDescendantsAttribute()
    {
        $this->findDescendants($this);
        return $this->descendants;
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id')->with('translations');
    }

    public function getLocalizedRouteKey($locale)
    {
        // TODO: Implement getLocalizedRouteKey() method.
    }
}