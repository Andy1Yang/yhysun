<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页
    public function index(){

        return view('web.index.index', ['user' => 'yhy']);
    }
}
