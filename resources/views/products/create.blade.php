@extends('layout')

@section('content')
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Description</label>
        <textarea name="description" required></textarea>
        <label>Price</label>
        <input type="number" name="price" step="0.01" required>
        <label>Stock</label>
        <input type="number" name="stock" required>
        <button type="submit">Add Product</button>
    </form>
@endsection
