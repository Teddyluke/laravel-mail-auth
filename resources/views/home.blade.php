@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="left-card-header">
                    Lista Libri
                  </div>
                  <div class="right-card-header">
                    <a class="btn btn-success" href="{{route('book.create')}}" role="button">Nuovo Libro</a>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                      @foreach ($books as $book)
                        <li>
                          Titolo: <a href="{{route('book.show', $book -> id)}}">{{$book -> title}}</a>
                        </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
