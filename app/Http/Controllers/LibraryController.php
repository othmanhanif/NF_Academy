<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function showGenres()
    {
        $genres = [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Non-fiction'],
            ['id' => 3, 'name' => 'Science Fiction'],
            ['id' => 4, 'name' => 'Fantasy'],
            ['id' => 5, 'name' => 'Mystery'],
        ];

        return view('genre', compact('genres'));
    }

    public function showAuthors()
    {
        $authors = [
            ['id' => 1, 'name' => 'Agatha Christie'],
            ['id' => 2, 'name' => 'J.K. Rowling'],
            ['id' => 3, 'name' => 'George Orwell'],
            ['id' => 4, 'name' => 'Isaac Asimov'],
            ['id' => 5, 'name' => 'Stephen King'],
        ];

        return view('author', compact('authors'));
    }
}