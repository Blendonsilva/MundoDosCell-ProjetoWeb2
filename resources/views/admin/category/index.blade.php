@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
             <h4>Category Page</h4>
             <hr>
        </div>
        <div class='card-body'>
            <table class="table table-bordered table-strinped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Imagem aqui">
                            </td>
                            <td>
                                <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-primary">Deletar</div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
