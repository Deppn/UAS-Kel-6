@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label>Description</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
        <label>Price</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
        <label>Stock</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required>
        <button type="submit">Update Product</button>
    </form>
@endsection
