@extends('layouts.master')
@section('title', 'Faqs')
@section('content')
<div class="container">
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">
	    <br/>
		  <ol>
			<a href="{{url('/')}}">Home</a>
			&nbsp;&nbsp;&nbsp;<li>Courses</li>
		  </ol>
		  <h2>Add Courses</h2>
		</div>
	 </section><!-- End Breadcrumbs -->
	 <div class="card">
	  	<div class="card-body">
	  		<div class="d-flex justify-content-center">
			 	<div class="col-md-6 col-sm-12">
			 		{!! Form::open(['url' => 'universities/create', 'method'=>'post', 'encType'=>'nultipart/form-data']) !!}
			 			@csrf
			    		<div class="form-group">
			    			@php $universities[null]='Select universities';@endphp
			    			{{Form::label('University', 'University', ['class'=>'control-label'])}}
								{{Form::select('university', $universities, null, ['class' => 'form-control'])}}	
			    			}
			    		</div>
			    		<div class="form-group">
			    			{{Form::label('Course Title', 'Course Title', ['class'=>'control-label'])}}
								{{Form::text('title', '', ['class' => 'form-control'])}}	
			    		</div>
			    		<div class="form-group">
			    			{{Form::label('Description', 'Description', ['class'=>'control-label'])}}
								{{Form::textarea('description', '', ['class' => 'form-control'])}}
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