<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category :: latest()->get(); // Lấy danh sách tin tức mới nhất
        return view('news.index', compact('news'));
    }
}
