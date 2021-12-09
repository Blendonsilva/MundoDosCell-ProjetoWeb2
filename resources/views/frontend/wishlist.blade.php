@extends('layouts.front')

@section('title')
    Meu Carrinho
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('wishlist') }}">
                Favoritos
            </a> /
        </h6>
    </div>
</div>


<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @if($wishlist->count() > 0)
            <div class="card-body">
                @foreach ($wishlist as $item)
                    <div class="row product_data">
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="image here">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>R$ {{ $item->products->selling_price }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if($item->products->qty >= $item->prod_qty)
                            <label for="Quantity">Quantidade</label>
                                    <div class="input-group text-center mb-3" style="width: 103px;">
                                        <button class="input-group-text decrement-btn">-</button>
                                        <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                                        <button class="input-group-text increment-btn">+</button>
                                    </div>
                                <h6>Em estoque</h6>
                            @else
                            <h6>Produto esgotado</h6>
                            @endif
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-success addToCartBtn"><i class="fa fa-shopping-cart"></i> adicionar ao carrinho</button>
                        </div>
                        <div class="col-md-1 my-auto">
                            <button class="btn btn-danger remove-wishlist-item"><i class="fa fa-trash "></i> Remover</button>
                        </div>
                    </div>
                @endforeach            
            </div>
            @else
                <h4>Não existe produtos na sua lista de desejo!</h4>
                
            @endif
        </div>
    </div>
</div>
@endsection