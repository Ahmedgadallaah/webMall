@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row">

        @foreach($products as $product)
            <div class="card col-3">
                <img class="card-img-top" src="{{asset('images/dell.png')}}" alt="car Image Cap">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Add To Cart</a>
                    <a href="#" class="card-link">Another Link</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
