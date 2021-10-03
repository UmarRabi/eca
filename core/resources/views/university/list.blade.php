@extends('layouts.master')
@section('title', 'Faqs')
@section('content')
<?php
//echo var_dump($universities);die;
?>
<div class="container">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
        <br/>
          <ol>
            <a href="{{url('/')}}">Home</a>
            &nbsp;&nbsp;&nbsp;<li>University</li>
          </ol>
          <h2>Universities</h2>
        </div>
     </section><!-- End Breadcrumbs -->
     <div class="row d-flex justify-content-end">
         <div class="">
             <button class="btn btn-info "><i class="icofont-baht-plus:"></i></button>
         </div>
     </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
            <tr>
                <th>Name</th>
                <th>description</th>
                <th>Country</th>
                <th>Created_by</th>
                <th>Date Created</th>
                <th>Last Modified</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universities as $university)
            <tr>
                <td>{{$university->name}}</td>
                <td>{{$university->description}}</td>
                <td>{{$university->country_code}}</td>
                <td>{{$university->created_by}}</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
</div>
@endsection()