<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
// ***** 開始 *****
    function show() {
        $data = [
            'hello'=>'ハロー！',
        ];
        return view('article', $data);
    }
// ***** 終了 *****
}
