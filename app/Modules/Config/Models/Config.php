<?php

namespace App\Modules\Config\Models;

use Illuminate\Notifications\Notifiable;
use App\Modules\User\Models\User;
class Config extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value'
    ];
}
