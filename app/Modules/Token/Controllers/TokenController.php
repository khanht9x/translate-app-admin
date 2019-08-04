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
            if (!$token->user_id || $token->user_id == $request['user_id']) {
                $token->status = 1;
                $token->user_id = $request['user_id'];
                $token->infor = $request['infor'];
                $token->save();
                return response()->json([
                    'status' => 'success',
                    'data' => $token,
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Token đã được sử dụng',
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Token không chính xác',
        ]);
    }

    public function verifyDisk(){
        $request = request()->only(['token', 'user_id', 'infor']);
        $token = Token::where(['value' => $request['token'], 'user_id' => $request['user_id']])->first();
        if($token){
            if($token->infor !== $request['infor']){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Token đã được sử dụng',
                ]);
            }else{
                return response()->json([
                    'status' => 'success',
                    'data' => []
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Token không chính xác',
        ]);
    }
}
