<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {

      $books = Book::all();

      return view('home', compact('books'));

    }

    public function show($id) {

      $book = Book::findOrFail($id);

      return view ('book', compact('book'));

    }
}
