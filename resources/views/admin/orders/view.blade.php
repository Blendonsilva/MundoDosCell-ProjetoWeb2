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
                            <a href="{{ url('orders')}}" class="btn btn-warning float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Primeiro nome</label>
                                <div class="border p-2">{{ $orders->fname }}</div>
                                <label for="">Segundo nome</label>
                                <div class="border p-2">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border p-2">{{ $orders->email }}</div>
                                <label for="">Contato</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                                <label for="">Endereços</label>
                                <div class="border p-2">
                                    {{ $orders->address1 }},
                                    {{ $orders->address2 }},
                                    {{ $orders->city }},
                                    {{ $orders->state }},
                                    {{ $orders->country }},
                                </div>
                                <label for="">CEP</label>
                                <div class="border p-2">{{ $orders->pincode }}</div>

                            </div>
                            <div class="col-md-6">
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
                                                <td>{{ $item->prod_qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="80px" width="80px" alt="Imagem do produto">
                                                </td>
                                            </tr>
                                        @endforeach                    
                                    </tbody>
                                </table>
                                <h4 class="px-2">Valor Total <span class="float-end">R$ {{ $orders->total_price }}</span></h4>
                                <div class="mt-5 px-3">
                                    <label for="">Status do pedido</label>
                                    <form action="{{ url('update-order/'.$orders->id) }}" method='POST'>
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name='order_status'>
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pendente</option>
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="1">Completo</option>
                                        </select> 
                                        <button type='submit' class='btn btn-primary float-end mt-3'>Atualizar</button>
                                    </form>  
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
