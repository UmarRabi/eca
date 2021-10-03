@extends('layouts.master')
@section('title', 'All Universities')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
    <br>
	  <ol>
		<li><a href="{{url('/')}}">Home</a></li>
		<li>University</li>
	  </ol>
	  <h2>All Universities</h2>

	</div>
  </section><!-- End Breadcrumbs -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">
        @foreach($universities as $uni)
        <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <article class="entry">

            <div class="entry-img">
              <img src="{{asset('img/for-web.jpg')}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
            <a href="#">{{$uni->name}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-location-pin"></i> {{App\Country::find($uni->country_id)->name}}</li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
               {{$uni->description}}
              </p>
              <div class="read-more">
                <a href="#">View More</a>
              </div>
            </div>

          </article>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection