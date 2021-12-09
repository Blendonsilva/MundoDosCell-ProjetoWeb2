@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar Produtos</h4>
        </div>
        <div class='card-body'>
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="">{{ $products->category->name }}</option>
                          </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Longa Descrição </label>
                        <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Preço Original</label>
                        <input type="number" class="form-control" value="{{ $products->original_price }}" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Preço de venda</label>
                        <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Taxa</label>
                        <input type="number" class="form-control" value="{{ $products->tax }}" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantidade</label>
                        <input type="number" class="form-control" value="{{ $products->qty }}" name="qty">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Publicar</label>
                        <input type="checkbox" {{ $products->status == '1' ? 'checked' : ''}} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Promoção</label>
                        <input type="checkbox" {{ $products->trending  == '1' ? 'checked' : ''}} name="trending">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Palavra-chave</label>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Media Descrição </label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>
                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image)}}" alt="">
                    @endif
                    <div class="col-md-12">
                       <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                       <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection
