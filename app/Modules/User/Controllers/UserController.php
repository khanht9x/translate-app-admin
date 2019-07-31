<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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

    public function login()
    {
        $request = request()->only(['email', 'password']);
        if (auth()->attempt($request)) {
            return response()->json([
                'status' => 'success',
                'data' => auth()->user(),
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }
}
