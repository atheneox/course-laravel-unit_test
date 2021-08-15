<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::all();

        return response()
                    ->json([
                        'status'=>200,
                        'model'=>'articles',
                        'data'=> $articles
                    ]);

    }

    public function store(Request $request){

        $article = new Article;

        $article->name = $request->name;
        $article->description = $request->description;

        $article->save();

        return response()
                    ->json([
                        'msg'=> 'article saved successfully'
                    ]);

    }
    
}
