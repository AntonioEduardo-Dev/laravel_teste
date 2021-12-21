@extends('templates.template')

@section('content')
    <h2 class="text-center">teste crud</h2>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Cód</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection