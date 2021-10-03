@extends('layouts.master')
@section('title', 'Search result')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
    <br>
	  <ol>
		<li><a href="{{url('/')}}">Home</a></li>
		<li>Search</li>
	  </ol>
	  <h2>Search Result</h2>

	</div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-12 text-center text-lg-left">
          <h3>Search for Universities and Courses</h3>
        <form method="GET" action="{{route('search')}}">
            <div class="form-row align-items-center">
              <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Name</label>
               <select class="form-control" name="country">
                 <option value="">-- SELECT COUNTRY --</option>
                 @foreach($countries as $country)
               <option value="{{$country->id}}">{{$country->name}}</option>
                 @endforeach
               </select>
              </div>
              <div class="col-4">
                <label class="sr-only" for="inlineFormInput">Name</label>
               <select class="form-control" name="university">
                 <option value="">-- SELECT UNIVERSITY --</option>
                 @foreach($universities as $university)
                 <option value="{{$university->id}}">{{$university->name}}</option>
                   @endforeach
               </select>
              </div>
              <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <select class="form-control" name="course">
                  <option value="">-- SELECT COURSE --</option>
                </select>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-outline-warning mb-2">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">
        @foreach($universities as $uni)
        <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <article class="entry">

            <div class="entry-img">
              <img src="{{asset('img/client-3.png')}}" alt="" class="img-fluid">
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

          </article><!-- End blog entry -->
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection