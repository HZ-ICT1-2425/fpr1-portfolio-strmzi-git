<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function single($id) {
        $blog = BlogModel::findOrFail($id);
        return view('blog.single', ['blog_data' => $blog]);
    }

    public function blog(Request $request):View {
        $blog_data = BlogModel::all();
        return view('blog', ["data" => $blog_data]);
    }
}
