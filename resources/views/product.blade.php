@extends('layouts.app')

@section('content')
<style>
		.navbar {
			background-color: #fff;
			border-bottom: 1px solid #ddd;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.nav-link {
			color: #333;
		}

		.card {
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			max-width: 350px;
			margin-bottom: 30px;
            background-color: #F5F5DC;
		}
        body {
            background-image: url('{{ asset('images/doggo.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">All products</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="product">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('products.index') }}">All Products</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">
                                <textarea id="details" class="form-control @error('details') is-invalid @enderror" name="details" required autocomplete="details">{{ old('details') }}</textarea>

                                @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" accept="image/*">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if (isset($product) && $product->photo)
                                    <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" style="max-width: 100%;">
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
  background-color: #f0f0f0;
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
