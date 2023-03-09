<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index');
    }

    public function add() {
        return view('admin.articles.add');
    }

    public function addSubmit(Request $input) {
        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$input->picture->extension();
        $input->picture->move(public_path('images/articles/'), $imageName);

        Article::create([
            'name' => $input->name,
            'description' => $input->description,
            'picture' => $imageName,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('admin.articles.show');
    }

    public function edit($id) {

        $article = DB::table('articles')->where('id', $id)->get()->first();

        return view('admin.articles.edit')->with([
            'article' => $article
        ]);
    }

    // public function remove(Article $article) {
    //     if (Auth::user()->id == $article->user_id || Auth::user()->id == 1) {
    //         $article->delete();
    //     }
    //     return redirect()->route('admin');
    // }
}
