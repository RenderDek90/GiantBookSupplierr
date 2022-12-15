<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function viewCategory($id){
        $selector = Category::find($id);

        return view('category', ['cate' => $selector]);
    }
}
