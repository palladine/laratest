<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
		  	@if(count($errors) > 0)
                    			<ul class="alert alert-danger">
                         			   @foreach($errors->all() as $error)
                              			<li>{{ $error }}</li>
                         			   @endforeach
                    			</ul>
  			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			@if (Session::has('message'))
				<div class='alert alert-success'>
					{{ Session::get('message') }}
				</div>
			@endif
		</div>
	</div>
</div>