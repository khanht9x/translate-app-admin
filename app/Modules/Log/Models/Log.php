<?php

namespace App\Modules\Log\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Modules\User\Models\User;
use App\Modules\Token\Models\Token;
class Log extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'token_id', 'ip', 'hmac'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function token()
    {
        return $this->hasOne(Token::class, 'token_id', 'id');
    }
}
