@extends('layouts.master')
@section('title', 'Faqs')
@section('content')
<div class="container">
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">
	    <br/>
		  <ol>
			<a href="{{url('/')}}">Home</a>
			&nbsp;&nbsp;&nbsp;<li>University</li>
		  </ol>
		  <h2>Add University</h2>
		</div>
	 </section><!-- End Breadcrumbs -->
	 <div class="card">
	  	<div class="card-body">
	  		<div class="d-flex justify-content-center">
			 	<div class="col-md-6 col-sm-12">
			 		{!! Form::open(['url' => 'universities/create', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
			 			@csrf
			    		<div class="form-group">
			    			{{Form::label('Country', 'country', ['class'=>'control-label'])}}
								{{Form::select('country', $countries, null, ['class' => 'form-control'])}}	
			    		</div>
			    		<div class="form-group">
			    			{{Form::label('Name', 'Name', ['class'=>'control-label'])}}
								{{Form::text('name', '', ['class' => 'form-control'])}}	
			    		</div>
			    		<div class="form-group">
			    			{{Form::label('Description', 'Description', ['class'=>'control-label'])}}
								{{Form::textarea('description', '', ['class' => 'form-control'])}}
			    		</div>
			    		<div class="form-group">
			    			{{Form::label('Photo', 'Photo', ['class'=>'control-label'])}}
								{{Form::file('photo', ['class' => 'form-control'])}}
			    		</div>
			    		<div class="d-flex justify-content-end">
			    			{{Form::submit('Save', ['class'=>'btn btn-primary'])}}
			    		</div>
					{!! Form::close() !!}
			 	</div>
			 </div>			
		</div>
	</div>
</div>
	 

@endsection()