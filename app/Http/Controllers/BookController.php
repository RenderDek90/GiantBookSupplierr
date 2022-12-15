<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index(){
        $books = DB::table('books')->get();

        return view('home', ['books' => $books]);
    }
}
