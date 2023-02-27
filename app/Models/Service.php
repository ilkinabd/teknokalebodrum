<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable;

    protected $table = 'services';

    public function items()
    {
        return $this->hasMany(ServiceItem::class, 'service_id')->withTranslations();
    }
}