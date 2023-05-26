@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Product</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="stripe">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Nama</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product['category'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>Rp. {{ number_format($product['price'], 0, 2) }}</td>
                                    <td>Rp. {{ number_format($product['sale_price'], 0, 2) }}</td>
                                    <td>{{ $product['brands'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger">Delete</button>
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
