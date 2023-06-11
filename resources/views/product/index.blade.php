@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Product</h1>

            <a class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">Create New</a>

            {{-- Flash session message --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Nama</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp. {{ number_format($product->price, 0, 2) }}</td>
                                    <td>Rp. {{ number_format($product->sale_price, 0, 2) }}</td>
                                    <td>
                                        @if ($product->image == null)
                                            <small><em>No Image</em></span>
                                            @else
                                                <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50px">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->approve)
                                            <small class="text-success">Approved</small>
                                        @else
                                            <small class="text-danger">Rejected</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::user()->role->name == 'Admin')
                                            @if ($product->approve)
                                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.reject', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                                </form>
                                            @else
                                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.approve', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                                </form>
                                            @endif
                                        @else
                                            <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
