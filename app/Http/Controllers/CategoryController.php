<?php
namespace App\Http\Controllers;

use App\Models\News; // Nếu bạn có model News
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory($category)
    {
        // Lấy các tin tức theo thể loại
        $newsItems = News::where('category', $category)->get();

        // Trả về view với biến category và newsItems
        return view('your_view_name', compact('newsItems', 'category'));
    }
}
