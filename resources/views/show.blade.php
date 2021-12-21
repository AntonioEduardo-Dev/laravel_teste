@extends('templates.template')

@section('content')
    <h2 class="text-center">Visualizar crud</h2>
    <hr>
    <div class="col-8 m-auto">
        @php
            $user = $books->find($books->id)->relUsers;
        @endphp

        Titulo : {{($books->title)}} <br>
        Paginas : {{($books->pages)}} <br>
        Preço : {{($books->price)}} <br>
        Autor : {{($user->name)}} <br>
        Email : {{($user->email)}}
    </div>
@endsection