<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use Translatable;

    public    $timestamps = false;
    protected $table      = 'service_items';

}