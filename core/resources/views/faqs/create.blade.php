@extends('layouts.master')
@section('title', 'Faqs')
@section('content')
  <div class="card">
	<div class="card-header">
	</div>
	<div class="card-body">
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
		    <br>
			  <ol>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>Faq</li>
			  </ol>
			  <h2>Create New</h2>

			</div>
		 </section><!-- End Breadcrumbs -->
		 <div class="d-flex justify-content-center">
		 	<div class="col-md-6 col-sm-12">
		 		{!! Form::open(['url' => 'faqs/create', 'method'=>'post']) !!}
		 			@csrf
		    		<div class="form-group">
		    			{{Form::label('Question', 'Question', ['class'=>'control-label'])}}
							{{Form::text('title', '', ['class' => 'form-control'])}}	
		    		</div>
		    		<div class="form-group">
		    			{{Form::label('body', 'Answer', ['class'=>'control-label'])}}
							{{Form::textarea('body', '', ['class' => 'form-control'])}}	
		    		</div>
		    		<div class="d-flex justify-content-end">
		    			{{Form::submit('Save', ['class'=>'btn btn-primary'])}}
		    		</div>
				{!! Form::close() !!}
		 	</div>
		 </div>			
	</div>
</div>

@endsection();
