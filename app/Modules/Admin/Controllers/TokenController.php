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
}
