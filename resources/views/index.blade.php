@extends('templates.template')

@section('content')
    <h2 class="text-center">Teste crud</h2>
    
    <hr>

    <div class="text-center mt-3 mb-3">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success text-center">
                Cadastrar
            </button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cód</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    @php
                        $user = $book->find($book->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$book->price}}</td>
                        <td class="text-center">
                            <a href="{{url("books/$book->id")}}">
                                <button class="btn btn-info text-white">
                                    Visualizar
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-success">
                                    Editar
                                </button>
                            <a href="">
                                <button class="btn btn-danger">
                                    Apagar
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection