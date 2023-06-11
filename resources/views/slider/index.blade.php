@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Slider</h1>

            <a class="btn btn-primary mb-2" href="{{ route('slider.create') }}" role="button">Create New</a>
            
            {{-- Flash session message --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ Str::limit($slider->caption, 20) }}</td>
                                    <td>
                                        @if ($slider->image)
                                            <img src="{{ asset('storage/slider/' . $slider->image) }}" class="img-fluid" style="max-width: 100px;" alt="{{ $slider->image }}">
                                        @else
                                            <small><em>Image not available</em></small>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($slider->approve)
                                            <small class="text-success">Approved</small>
                                        @else
                                            <small class="text-danger">Rejected</small>
                                        @endif
                                    </td>

                                    @if (Auth::user()->role->name == 'Admin')
                                        <td>
                                            @if ($slider->approve)
                                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.reject', $slider->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                                </form>
                                            @else
                                                <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.approve', $slider->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                                </form>
                                            @endif
                                        </td>
                                    @else
                                        <td>
                                            <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                                                <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    @endif

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
