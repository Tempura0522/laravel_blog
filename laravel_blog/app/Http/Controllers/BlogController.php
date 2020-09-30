<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Auth;

class BlogController extends Controller
{
    //ブログ新規作成画面
    public function create()
    {
        $user = User::find(Auth::id());
        return view('blog.create',[
            'user' => $user
        ]);
    }
}
