<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
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
            background-image: url('{{ asset('images/bg2.jpg') }}');
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
	<div class="container mt-4">
		<div class="row">
			@foreach($products as $product)
				<div class="col-md-4">
					<div class="card mb-4">
						<img class="card-img-top" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
						<div class="card-body">
							<h5 class="card-title">{{ $product->name }}</h5>
							<p class="card-text">{{ $product->details }}</p>
							<p class="card-text">${{ $product->price }}</p>
							<a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a><br>
                            <!-- controller -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                         <button type="submit" class="btn btn-primary">Buy Product</button>
                            </form>

						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>

	
    <!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
