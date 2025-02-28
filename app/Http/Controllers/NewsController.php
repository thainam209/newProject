<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index()
    {
        $news = News :: latest()->get(); // Lấy danh sách tin tức mới nhất
        $category = Category :: latest()->get();
        return view('news.index', compact('news','category'));
    }
}
