<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        return view('books.index');
    }

    public function show(Request $request, Book $book)
    {
        return view('books.show', compact('book'));
    }
}
