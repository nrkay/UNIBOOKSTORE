<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::with('publisher')->get();
        return view('Pages.index', ['data' => $data]);
    }
}
