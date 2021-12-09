@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
             <h4>Registro de usuarios</h4>
             <hr>
        </div>
        <div class='card-body'>
            <table class="table table-bordered table-strinped">
                <thead>
                    <tr>
                       <th>Id</th>
                       <th>Nome</th>
                       <th>Email</th>
                       <th>Telefone</th>
                       <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <th>{{ $item->name.' '.$item->lname }}</th>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ url('usuario/'.$item->id) }}" class="btn btn-primary btn-sm">Vizualizar</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
