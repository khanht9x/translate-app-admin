<?php

namespace App\Modules\Config\Models;

use Illuminate\Notifications\Notifiable;

class Config extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value',
    ];
}
