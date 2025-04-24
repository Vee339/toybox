<!DOCTYPE html>
<html>
<head>
    <title>Toybox Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #fceabb, #f8b500);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1, h2 {
            color: #343a40;
            font-weight: bold;
        }
        .card {
            background-color: #fff3cd;
            border: none;
        }
        .card-title {
            color: #d63384;
        }
        .card-text {
            color: #495057;
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Welcome to Toybox</h1>

    <h2 class="mb-3">Toys</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
        @foreach($toys as $toy)
            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{ $toy->name }}</h5>
                        <p class="card-text"><strong>Type:</strong> {{ $toy->type }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ $toy->price }}</p>
                        <p class="card-text">{{ $toy->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="mb-3">Children</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($children as $child)
            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{ $child->name }}</h5>
                        <p class="card-text"><strong>Age:</strong> {{ $child->age }}</p>
                        <p class="card-text"><strong>Favorite Toy:</strong> {{ $child->favorite_toy }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-muted mt-5 py-4">
    <div class="container">
        <p class="mb-0">© 2025 Toybox. All rights reserved.</p>
    </div>
</footer>

</body>
</html>