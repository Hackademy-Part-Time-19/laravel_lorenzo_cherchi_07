<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // private $articles = [
    //     ['title' => 'Articolo 1', 'category' => 'categoria test 1', 'description' => 'descrizione test 1'],
    //     ['title' => 'Articolo 2', 'category' => 'categoria test 2', 'description' => 'descrizione test 2'],
    //     ['title' => 'Articolo 3', 'category' => 'categoria test 3', 'description' => 'descrizione test 3'],
    //     ['title' => 'Articolo 4', 'category' => 'categoria test 1', 'description' => 'descrizione test 4']
    // ];


    public function index()
    {
        $articles = Article::all();
        return view('articles/articles', ['articoli' => $articles, 'titolo' => 'titolo test']);
    }


    public  function show($id)
    {
        $article = Article::find($id);
        return view('/article/article', ['articolo' => $article]);
    }

    public function store(Request $request)
    {

        // Article::create(['title' => 'title create', 'description' => 'description create', 'body' => 'body create']);

        Article::create($request->all());
    }

    public function create()
    {
        return view('create-article');
    }
}
