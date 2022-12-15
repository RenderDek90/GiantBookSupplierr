<?php

namespace App\Http\Controllers;

use App\Models\Book;

class DetailController extends Controller
{
    public function detail($book_id){

        $data = Book::find($book_id);
        return view('detail', ["books" => $data]);
    }
}
