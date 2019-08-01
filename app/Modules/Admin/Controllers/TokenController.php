<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Token\Models\Token;
use App\Modules\Helper\KeygenHelper;


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
    public function index()
    {
        $tokens = Token::with(['created_by_user', 'user'])->paginate(24);
        return view('Admin::token.token', [
            'tokens' => $tokens
        ]);
    }

    public function create()
    {
        $token = KeygenHelper::generateCode();
        $token = Token::create([
            'value' => $token,
            'created_by' => 1
        ]);

        return redirect()->route('admin.token');
    }

    public function verify()
    {

        $request = request()->only(['token', 'user_id']);
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
                $token->information = $request['infomartion'];
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
