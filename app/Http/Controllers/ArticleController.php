<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index');
    }

    public function add() {
        return view('admin.articles.add');
    }
}
