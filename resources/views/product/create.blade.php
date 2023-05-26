@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create User</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" aria-label="category" id="category" name="category">
                                <option selected disabled>- Choose Category -</option>
                                <option value="cellphone">cellphone</option>
                                <option value="tablet">tablet</option>
                                <option value="wearable">wearable</option>
                                <option value="laptop">laptop</option>
                                <option value="accessories">accessories</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="sale-price" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" id="sale-price" name="sale_price" required>
                        </div>
                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <select class="form-select" aria-label="brand" id="brand" name="brand">
                                <option selected disabled>- Choose Brand -</option>
                                <option value="Apple">Apple</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Logitech">Logitech</option>
                                <option value="Asus">Asus</option>
                                <option value="Lenovo">Lenovo</option>
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
