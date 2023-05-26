@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Edit Product</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" aria-label="category" id="category" name="category">
                                <option selected disabled>- Choose Category -</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" value="{{ $product->price }}" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="sale-price" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" id="sale-price" value="{{ $product->sale_price }}" name="sale_price" required>
                        </div>
                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <select class="form-select" aria-label="brand" id="brand" name="brand">
                                <option selected disabled>- Choose Brand -</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" {{ $product->brands == $brand->name ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
