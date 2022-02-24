<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use Exception;

class BlogController extends Controller
{
    public function index(Request $request) {
        $page = $request->query("page", 1); 
        $articles = Article::latest()->skip(($page - 1) * 5)->take(6)->get();
        return view("blog", ["articles" => $articles, "page" => $page]);
    }

    public function getArticle(Request $request, $id) {
        try {
            $article = Article::findOrFail($id);
            return view("blog-details", ["article" => $article]);
        } catch(Exception $e) {
            return view("404");
        }
    }
}
