<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword; //todo variable yang mengambil request keyword yang diketikan di kolom search
        if ($keyword) {
            $articles = Article::with('Category')
                ->whereStatus(1)
                ->where('title', 'like', '%' .$keyword. '%')
                ->latest()
                ->paginate(6);
        } else {
            $articles = Article::with('Category')->whereStatus(1)->latest()->paginate(6);
        }

        return view('front.home.index', [
            'latest_post' => Article::latest()->first(),
            'articles' => $articles,
            'categories' => Category::latest()->get(),
        ]);
    }
}
