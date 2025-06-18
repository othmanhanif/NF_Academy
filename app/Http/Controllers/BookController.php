<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();

        return response()->json([
            'status' => 'success',
            'data' => $books
        ], 200);
    }
}