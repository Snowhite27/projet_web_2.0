<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index() {
        return view('articles');
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

        return redirect()->route('admin.articles');
    }

    public function edit($id, $alerts = null) {
        $article = DB::table('articles')->where('id', $id)->get()->first();

        return view('admin.articles.edit')->with([
            'article' => $article,
            'alerts' => $alerts
        ]);
    }

    public function editSubmit($id, Request $input) {
        $article = Article::find($id);
        $article->name = $input->name;
        $article->description = $input->description;

        if ($input->picture) {
            $input->validate(['picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

            $imageName = time().'.'.$input->picture->extension();
            $input->picture->move(public_path('images/articles/'), $imageName);
            $article->picture = $imageName;
        }

        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        $article->update();
        return redirect()->route('admin.articles');
    }

    public function remove($id, Article $article) {
        $article = Article::find($id);
        if (Auth::user()->id == $article->user_id || Auth::user()->id == 1) {
            $article->delete();
        }
        return redirect()->route('admin.articles');
    }
}
