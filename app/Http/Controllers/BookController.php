<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id){
        return view('books.index', ['id' => $id]);
    }
}
