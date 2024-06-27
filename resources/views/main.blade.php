<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Shopping Cart Example - Tutsmake.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <h2 class="mb-3">Your Cart</h2>
        
    @php
    $totalQuantity = 0;
    @endphp
    
    @if(session('cart'))
    @foreach(session('cart') as $item)
        @php
        $totalQuantity += $product['quantity'];
        @endphp
    @endforeach
    @endif
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')
</body>
</html>