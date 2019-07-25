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
        'user_id', 'value', 'created_by', 'information'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function created_by_user()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function getStatusTextAttribute()
    {
        $status = $this->status ? "Đã sử dụng" : "Chưa sử dụng";
        return $status;
    }
}
