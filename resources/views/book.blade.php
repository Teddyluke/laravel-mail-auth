@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2>
                    {{ $book -> title }}
                  </h2>
                </div>

                <div class="card-body">
                  <div class="infobox">
                    <h4>Author: </h4> {{$book -> author}}
                  </div>
                  <div class="infobox">
                    <h4>Casa Editrice: </h4> {{$book -> editor}}
                  </div>
                  <div class="infobox">
                    <h4>ISBN: </h4> {{$book -> isbn}}
                  </div>

                  <div class="buttons">
                    <a class="btn btn-secondary" href="{{route('home')}}" role="button">GO BACK</a>
                    @auth
                      <a class="btn btn-primary" href="{{route('book.edit', $book -> id)}}" role="button">EDIT</a>
                      <a class="btn btn-danger" href="{{route('book.del', $book -> id)}}" role="button">DELETE</a>
                    @endauth

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
