<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {


    	$articles = Article::latest('published_at')->Published()->get();

    	return view('articles.index', compact('articles'));
    }

    public function show(Article $article) 
    {

    	return view('articles.show', compact('article'));
    }

    public function create() 
    {
        // if(\Auth::guest())
        // {
        //     return redirect('articles');
        // }

    	return view('articles.create');
    }

    public function store(Request  $request) 
    {
        $article = new Article($request->all());

        \Auth::user()->articles()->save($article);


    	return redirect('articles');
    }

    public function edit(Article $article) 
    {

    	//$article = Article::findOrFail($id);

    	return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request) 
    {
    	//$article = Article::findOrFail($id);

    	$article->update($request->all());



    	return redirect('articles');
    }
}
