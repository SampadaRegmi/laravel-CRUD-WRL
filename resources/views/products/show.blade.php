@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ $product->photo }}" alt="{{ $product->name }}" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <div class="product-info">
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Details:</strong> {{ $product->details }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <p><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a></p>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .product-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .product-info p {
            margin: 0 0 10px;
        }
        .product-info img {
            max-width: 100%;
        }
    </style>
@endsection
