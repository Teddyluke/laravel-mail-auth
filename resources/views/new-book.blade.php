@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2>
                    Inserisci i dati del nuovo libro
                  </h2>
                </div>

                <div class="card-body">

                  <form action="{{route('book.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="title">TITOLO</label> <br>
                      <input type="text" name="title" value="">
                    </div>
                    <div class="form-group">
                      <label for="author">AUTORE</label> <br>
                      <input type="text" name="author" value="">
                    </div>
                    <div class="form-group">
                      <label for="isbn">ISBN</label> <br>
                      <input type="number" name="isbn" value="">
                    </div>
                    <div class="form-group">
                      <label for="editor">CASA EDITRICE</label> <br>
                      <input type="text" name="editor" value="">
                    </div>
                    <button class="btn btn-success" type="submit" name="button">INSERISCI NUOVO LIBRO</button>
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
