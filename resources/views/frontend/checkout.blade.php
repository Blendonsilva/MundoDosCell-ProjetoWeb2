@extends('layouts.front')

@section('title')
    Pagamento
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detales basicos</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">Primeiro Nome</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->name }}' name="fname" placeholder="Digite seu Primeiro nome">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Segundo Nome</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->lname }}' name="lname" placeholder="Digite seu Segundo nome">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->email }}'name="email" placeholder="Digite seu Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->phone }}' name="phone" placeholder="Digite numero para contato">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->address1 }}' name="address1" placeholder="Digite o Endereço">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Complemento</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->address2 }}' name="address2" placeholder="Digite o complemento">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Cidade</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->city }}' name="city" placeholder="Digite sua cidade">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Estado</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->state }}' name="state" placeholder="Digite o Estado">
                                </div>
                                <div class="col-md-6">
                                    <label for="">CEP</label>
                                    <input type="text" class="form-control" value='{{ Auth::user()->pincode }}' name="pincode" placeholder="Digite o CEP">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="">Menssagem</label>
                                <textarea class="form-control" aria-label="With textarea" name="message" placeholder="Digite uma menssagem pra gente aqui!"></textarea>
                            </div>            
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Outros detales</h6>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>N. Produto</th>
                                        <th>Quantidade</th>
                                        <th>Preço unitario</th>
                                        <th>Valor total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                    <tr>
                                        <td><img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="image here"></td>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->prod_qty }}</td>
                                        <td>R$ {{ $item->products->selling_price }}</td>
                                        <td>R$ {{ $item->products->selling_price * $item->prod_qty  }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type='submit' class="btn btn-primary float-end">Confirmar pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
    </div>
@endsection