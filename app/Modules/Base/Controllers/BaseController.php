<?php

namespace App\Modules\Base\Controllers;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{

    function index()
    {
        return view('welcome');
    }
}
