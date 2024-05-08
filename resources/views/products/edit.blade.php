<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <!-- @include('partials.errors') -->

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea class="form-control" id="details" name="details">{{ old('details', $product->details) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
                @if ($product->photo)
                    <img src="{{ $product->photo }}" alt="{{ $product->name }}" width="150">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
            
        </form>
    </div>
    <style>
        .container {
  max-width: 800px;
  margin: 0 auto;
}

.card {
  margin-top: 30px;
  border: 1px solid #ccc;
}

.card-header {
  background-color: #f0f0f0;
  font-weight: bold;
  padding: 10px;
}

.card-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.col-form-label {
  text-align: right;
  padding-right: 0;
}

.form-control {
  width: 100%;
  height: 38px;
  padding: 6px 12px;
  font-size: 16px;
  line-height: 1.5;
  color: #555;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

.form-control:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
}

.invalid-feedback {
  display: block;
  width: 100%;
  margin-top: .25rem;
  font-size: 80%;
  color: #dc3545;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
  color: #fff;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  opacity: 0.65;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  background-color: #0062cc;
  border-color: #005cbf;
  color: #fff;
}

.form-control-file {
  display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: .375rem .75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #555;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border-radius: .25rem;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

.form-control-file:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
}

img {
  margin-top: 10px;
  max-width: 100%;
}

        </style>
@endsection
