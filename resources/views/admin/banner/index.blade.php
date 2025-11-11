@extends('admin.layout.app')

@section('content')

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">OUR BANNER</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <a href="{{ route('banners.create') }}" class="btn btn-primary">Add Banner</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <table class="table text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Image</th>
                                        <th>Banner Tittle</th>
                                        <th>Short Description</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                    <tr class="align-middle">
                                        <td>{{ $banner->id }}</td>
                                        <td>
                                            @if($banner->image)
                                                <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt="Banner Image" width="60">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->short_description }}</td>
                                        <td>{{ $banner->description }}</td>
                                        <td>
                                            @if($banner->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="d-flex "style="gap:5px;" >
                                            <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                            <form action="{{ route('banners.destroy', $banner->id) }}" 
                                                  method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this category?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($banners->isEmpty())
                                <div class="text-center p-3">
                                    <em>No Banner found.</em>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection

