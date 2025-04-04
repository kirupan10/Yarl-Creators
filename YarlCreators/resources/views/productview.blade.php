@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
        </div>
    </div>
</div>
@endsection