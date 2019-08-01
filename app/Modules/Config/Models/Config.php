<?php

namespace App\Modules\Config\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value',
    ];
}
