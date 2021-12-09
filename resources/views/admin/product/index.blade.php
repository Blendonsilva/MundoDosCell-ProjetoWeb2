@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
             <h4>Pagina de Produtos</h4>
             <hr>
        </div>
        <div class='card-body'>
            <table class="table table-bordered table-strinped">
                <thead>
                    <tr>
                       <th>Id</th>
                       <th>Categoria</th>
                       <th>Nome</th>
                       <th>Descrição</th>
                       <th>Proço Original</th>
                       <th>Preço a venda</th>
                       <th>Imagem</th>
                       <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <th>{{ $item->category->name }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->original_price }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Imagem aqui">
                            </td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Deletar</div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
