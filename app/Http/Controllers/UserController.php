<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use App\Mail\UserAction;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function delete($id) {

    $book = Book::findOrFail($id);
    $book -> delete();

    $user = Auth::user();

    $action = "DELETE";

    Mail::to('admin@test.it')->send(new UserAction($user, $book, $action));

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

  public function edit($id) {

    $book = Book::findOrFail($id);

    return view('edit-book', compact('book'));

  }

  public function update(Request $request, $id) {

    $data = $request -> all();

    $book= Book::findOrFail($id);
    $book -> update($data);

    return redirect() -> route ('home');

  }
}
