<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
// ***** 開始 *****
    function show() {
        return view('article');
    }
// ***** 終了 *****
}