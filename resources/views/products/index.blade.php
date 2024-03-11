@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
