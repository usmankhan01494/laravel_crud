@extends('admin.layout.app')

@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Service</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Category Name --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">About Tittle</label>
                            <input 
                                value="{{ old('name', $service->title) }}" 
                                type="text" 
                                class="form-control" 
                                name="title" 
                                placeholder="Enter About Tittle" 
                                required>
                        </div>
                    </div>
                    {{-- description --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label"> Description</label>
                            <input 
                                value="{{ old('description' ,$service->description) }}" 
                                type="text" 
                                class="form-control" 
                                name="description" 
                                placeholder="Enter Description">
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label"> Image</label>
                            <input 
                                value="{{ old('image' ,$service->image) }}" 
                                type="file" 
                                class="form-control" 
                                name="image" 
                                placeholder="Enter Image">
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive</option>
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
