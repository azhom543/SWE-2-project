@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3>
    <ul class="container">
        @forelse($products as $product)
            <li>product name: {{$product->name}}</li>
            <li>product price: {{$product->price}}</li>

            @empty
                <h3>NO PRODUCTS</h3>
        @endforelse
    </ul>
@endsection