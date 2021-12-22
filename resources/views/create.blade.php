@extends('templates.template')

@section('content')
    <h2 class="text-center">Create crud</h2>
    <hr>
    <div class="text-center mt-3 mb-3">
        <a href="{{url('books/')}}">
            <button class="btn btn-success text-center">
                Listar
            </button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <form action="{{url('books')}}" method="post" name="formCad" id="formCad">
            @csrf
            <select name="user_id" class="form-control mb-3" id="user_id">
                <option hidden>Autor:</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="text" class="form-control mb-3" name="title" id="title" placeholder="Título">
            <input type="text" class="form-control mb-3" name="pages" id="pages" placeholder="Paginas">
            <input type="text" class="form-control mb-3" name="price" id="price" placeholder="Preço">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
@endsection
