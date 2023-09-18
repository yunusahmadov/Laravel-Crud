@extends ('layouts.app')
@section ('body')
<div class="d-flex align-items-center justify-content-between">
<h1 class="mb-0">List Product</h1>
<a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
</div>
@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
@endsection