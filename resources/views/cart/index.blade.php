@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shopping Cart</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['product']->name }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                        </td>
                        <td>{{ $item['product']->price }}</td>
                        <td>{{ $item['product']->price * $item['quantity'] }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item['product']) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="#" class="btn btn-success">Checkout</a>
    @else
        <p>Your cart is empty</p>
    @endif
</div>
@endsection
