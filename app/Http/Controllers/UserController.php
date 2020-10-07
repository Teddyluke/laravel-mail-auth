<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function delete($id) {

    $book = Book::findOrFail($id);

    $book -> delete();

      return redirect() -> route('home');
  }

  public function create() {

    return view('new-book');
    
  }

  public function store(Request $request) {

    $data = $request -> all();

    $book = Book::create($data);

    return redirect() -> route('home');
  }
}
