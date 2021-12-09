@extends('layouts.front')

@section('title')
    Meus Pedidos
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Seus pedidos
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detalhes do Pedido</h4>
                                <hr>
                                <label for="">Primeiro nome</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Segundo nome</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Contato</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Endereços</label>
                                <div class="border">
                                    {{ $orders->address1 }}, <br>
                                    {{ $orders->address2 }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->state }}, 
                                    {{ $orders->country }}, 
                                </div>
                                <label for="">CEP</label>
                                <div class="border">{{ $orders->pincode }}</div>

                            </div>
                            <div class="col-md-6">
                                <h4>Detalhes do Produto</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Nome</th>
                                        <th>Quantidade</th>
                                        <th>Preço</th>
                                        <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Imagem do produto">
                                                </td>
                                            </tr>
                                        @endforeach                    
                                    </tbody>
                                </table>
                                <h4 class="px-2">Valor Total: <span class="float-end"> {{ $orders->total_price }}</span></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
