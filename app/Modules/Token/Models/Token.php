<?php

namespace App\Modules\Token\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Modules\User\Models\User;
class Token extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'value'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
