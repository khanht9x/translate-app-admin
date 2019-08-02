<?php

namespace App\Modules\Token\Controllers;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function verify()
    {
        $request = request()->only(['token', 'user_id', 'infor']);
        $token = Token::where(['value' => $request['token']])->first();
        if ($token) {
            if ($token->user_id && $request['infor'] !== $token['infor']) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Token đã được sử dụng',
                ]);
            } else {
                $token->status = 1;
                $token->user_id = $request['user_id'];
                $token->infor = $request['infor'];
                $token->save();

                return response()->json([
                    'status' => 'success',
                    'data' => $token,
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Token không chính xác',
        ]);
    }
}
