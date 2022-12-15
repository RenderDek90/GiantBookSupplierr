<?php

namespace App\Http\Controllers;

use App\Models\Publisher;

class PublisherController extends Controller
{
    public function view(){
        $publisher = Publisher::all();
        return view('publisher',["p" => $publisher]);
    }

    public function viewDetail($id){
        $publisher = Publisher::find($id);
        return view('publisher_detail', ["p"=>$publisher]);
    }
}
