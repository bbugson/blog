<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Comment;

class BlogController extends Controller
{
   public function category($slug) {
    	$category = Category::where('slug', $slug)->first();
    	return view('blog.category', [
    		'category' => $category,
    		'articles' => $category->articles()->where('published', 1)->paginate(12)
    	]);
    }
    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('blog.article', [
            'article' => $article,
            'comments' => $article->comments()->where('approved', 1)->orderBy('created_at', 'desc')-> paginate()
        ]);
    }

}
