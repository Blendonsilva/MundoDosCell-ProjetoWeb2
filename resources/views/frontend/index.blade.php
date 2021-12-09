@extends('layouts.front')

@section('title')
    Bem vindo ao Mundo Dos Celulares
@endsection

@section('content')
    @include('layouts.inc.slider')
   
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Produtos em Promoçao</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <a href="{{ url('category/'.$prod->slug) }}"> 
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" height="270px" width="200px" alt="Product Image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start"> R$ {{ $prod->selling_price }}</span>
                                        <span class="float-end"><s> R$ {{ $prod->original_price }}</s></span>
                                    </div>
                                </div>
                            </a>         
                        </div>
                    @endforeach  
                </div>   
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Categoria em tendencia</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('category/'.$tcategory->slug)}}" class="text-black">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}"  height="250px" width="230px" class="w-100" alt="Product Image">
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name }}</h5>
                                        <p>
                                            {{ $tcategory->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach  
                </div>   
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection