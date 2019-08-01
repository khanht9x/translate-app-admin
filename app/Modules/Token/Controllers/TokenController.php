<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Token\Models\Token;

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
        $request = request()->only(['token', 'user_id', 'infor']);
        $token = Token::where(['value' => $request['token'], 'status' => 0])->first();
        if ($token) {
            if ($token->user_id) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Token đã được sử dụng'
                ]);
            } else {
                $token->status = 1;
                $token->user_id = $request['user_id'];
                $token->infor = $request['infor'];
                $token->save();

                return response()->json([
                    'status' => 'success',
                    'data' => $token
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Token không chính xác'
        ]);
    }
}
