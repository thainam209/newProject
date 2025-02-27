<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News :: latest()->get(); // Lấy danh sách tin tức mới nhất
        return view('news.index', compact('news'));
    }
}
