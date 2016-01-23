<?php

namespace App\Http\Controllers\Frontend\Weixin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return view('frontend.weixin.member.index');
    }
}
