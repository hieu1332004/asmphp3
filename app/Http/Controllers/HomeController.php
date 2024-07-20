<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $newsItems = News::all();
        return view('home', compact('newsItems'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('layouts.show', compact('news'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $newsItems = News::where('title', 'LIKE', "%{$query}%")->get();
    
        return view('layouts.tim', compact('newsItems'));
    }
    
   

    
        
}
