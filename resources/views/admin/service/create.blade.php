  
  @extends('admin.layout.app')

@section('content')


<main class="app-main">
	<div class="app-content-header">
		<div class="container-fluid">
		<!--begin::Row-->
			<div class="row">
				<div class="col-sm-6"><h3 class="mb-0">Add Service</h3></div>
			</div>
		</div>
	</div>
	<div class="app-content">
		<div class="container-fluid">
		   <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
   			@csrf
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label" for="exampleInputEmail1">Service Tittle</label>
						<input type="text" class="form-control" name="title" placeholder="Enter Service Tittle">
					</div>
                 </div>
                 <div class="col-lg-6">
					<div class="form-group">
						<label class="form-label" for="exampleInputEmail1"> Description</label>
						<input type="text" class="form-control" name="description" placeholder="Enter Description">
					</div>
                 </div>
                 <div class="col-lg-6">
					<div class="form-group">
						<label class="form-label" for="exampleInputEmail1"> Image</label>
						<input type="file" class="form-control" name="image" placeholder="Enter Image">
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