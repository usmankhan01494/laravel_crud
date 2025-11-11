@extends('admin.layout.app')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Category</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">

                    {{-- Category Name --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Category Name</label>
                            <input 
                                value="{{ old('name', $category->name) }}" 
                                type="text" 
                                class="form-control" 
                                name="name" 
                                placeholder="Enter Category Name" 
                                required>
                        </div>
                    </div>

                    {{-- Slug --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Category Slug</label>
                            <input 
                                value="{{ old('slug', $category->slug) }}" 
                                type="text" 
                                class="form-control" 
                                name="slug" 
                                placeholder="Enter Category Slug">
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-lg-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>
@endsection
