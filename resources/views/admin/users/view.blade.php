@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                     <h4>Detales do usuario
                         <a href="{{ url('users') }}" class="btn btn-primary btn-sm float-right">Voltar</a>
                     </h4>
                     <hr>
                </div>
                <div class='card-body'>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Função</label>
                            <div class="p-2 border">{{ $users->role_as == '0'? 'Usuario':'Administrador' }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Primeiro Nome</label>
                            <div class="p-2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Segundo Nome</label>
                            <div class="p-2 border">{{ $users->lname }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Telefone</label>
                            <div class="p-2 border">{{ $users->phone }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Endereco</label>
                            <div class="p-2 border">{{ $users->address1 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Endereco 2</label>
                            <div class="p-2 border">{{ $users->address2 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Cidade</label>
                            <div class="p-2 border">{{ $users->city }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Estado</label>
                            <div class="p-2 border">{{ $users->state }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">CEP</label>
                            <div class="p-2 border">{{ $users->pincode }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
