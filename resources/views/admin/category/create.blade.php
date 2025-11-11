  
  @extends('admin.layout.app')

@section('content')


<main class="app-main">
	<div class="app-content-header">
		<div class="container-fluid">
		<!--begin::Row-->
			<div class="row">
				<div class="col-sm-6"><h3 class="mb-0">Add Category</h3></div>
			</div>
		</div>
	</div>
	<div class="app-content">
		<div class="container-fluid">
		   <form method="post" action="{{ route('categories.store') }}">
            @csrf
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label" for="exampleInputEmail1">Category Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter category Name">
					</div>
                 </div>
                 <div class="col-lg-6">
					<div class="form-group">
						<label class="form-label" for="exampleInputEmail1">Category Slug</label>
						<input type="text" class="form-control" name="slug" placeholder="Enter category Slug">
					</div>
                 </div>
              	<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Status</label>
						<select class="form-control" name="status">
							<option value="1">Active</option>
							<option value="0">Deactive</option>
						</select>
					</div>
                 </div>
              
            

                <div class="col-lg-12">
				<br>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
          
			</div>
			</form>
		</div>
	</div>
</main>


@endsection