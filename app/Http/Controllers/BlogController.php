<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
{
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('blog.show', compact('article'));
}
}
