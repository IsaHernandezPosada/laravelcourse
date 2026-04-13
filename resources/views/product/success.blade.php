@extends('layouts.app')

@section('title', 'Product Created')

@section('subtitle', 'Product saved successfully')

@section('content')
<div class="card shadow">
    <div class="card-body text-center">
<h3 class="mb-3 text-success">Product Created Successfully!</h3>
        <p class="mb-4">
            The product <strong>{{ $viewData["product"]["name"] }}</strong>
            was saved successfully.
        </p>

        <p>
            <strong>Price:</strong> ${{ $viewData["product"]["price"] }}
        </p>

        <a href="{{ route('product.index') }}" class="btn btn-primary mt-3">
            Back to Products
        </a>
    </div>
</div>
@endsection
