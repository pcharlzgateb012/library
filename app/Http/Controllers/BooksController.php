<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index()
    {
        //return 'Books';

        $data = Books::all();
        return view('books.index',['books'=>$data]);
    }
}

    

