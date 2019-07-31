<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Token\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function verify()
    {
        $token = request()->only(['token']);
        $token = Token::where(['value' => $token, 'user_id' => 0])->first();
        if($token){

        }
    }
}
