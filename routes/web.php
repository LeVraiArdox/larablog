<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/article/{id}', function(string $id) {
    $article = Post::find($id);
    $context = [
        'article' => $article
    ];
    return view('article', ['article' => $article ] );
});

Route::get('/articles', function () {
    $articles = Post::all();
    $nomBlog = 'La nature et ses merveilles';
    $nbArticles = count($articles);
    $context = [
        'nbArticles' => $nbArticles,
        'nomBlog' => $nomBlog,
        'articles' => $articles
    ];
    return view('articles', $context);
});

Route::post('/form', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'content' => 'required',
        'thumbnail' => 'required|url'
    ]);
    if ($validator->fails()) {
        return redirect('/add')
            ->withErrors($validator)
            ->withInput();
    }
    $title = $request->input('title');
    $content = $request->input('content');
    $thumbnail = $request->input('thumbnail');
    $post = new Post();
    $post->title = $title;
    $post->content = $content;
    $post->thumbnail = $thumbnail;
    $post->views = 0;
    $post->save();
    return redirect('/articles');
});

Route::get('/delete/{id}', function(string $id) {
    $article = Post::find($id);
    $article->delete();
    return redirect('/articles');
});