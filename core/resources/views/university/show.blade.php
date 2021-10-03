@extends('layouts.master')
@section('title', $uni->name)
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
    <br>
	  <ol>
		<li><a href="{{url('/')}}">Home</a></li>
		<li>University</li>
	  </ol>
	  <h2>{{$uni->name}}</h2>

	</div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Content Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-12 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="#">{{$uni->name}}</a>
            </h2>

            <div class="entry-content">
                @if($uni->id == 1)
              <p>
                <h2><u>Courses</u></h2>
                <ul>
                    <li>ECONOMICS</li>
                    <li>MANAGEMENT</li>
                    <li>BUSINESS, TRADE, AND EXCHANGE ACTIVITIES</li>
                    <li>INTERNATIONAL ECONOMIC RELATIONS</li>
                    <li>AGRO-ENGINEERING</li>
                    <li>VETERINARY MEDICINE</li>
                    <li>TECHNOLOGY OF MANUFACTURING AND PROCESSING ANIMAL PRODUCTS</li>
                    <li>AGRONOMY</li>
                </ul>
              </p>
              <h2><u>Fees Breakdown in USD</u></h2>
              <table class="table table-bordered">
                  <thead>
                      <th></th>
                      <th>Year 1</th>
                      <th>Year 2</th>
                      <th>Year 3</th>
                      <th>Year 4</th>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Yearly Tuition Fee</td>
                          <td>1750</td>
                          <td>1750</td>
                          <td>1750</td>
                          <td>1750</td>
                      </tr>
                      <tr>
                        <td>Yearly hostel fee</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <td>Application fee</td>
                        <td>1250</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Visa Support Invitation Letter</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Entry visa stamping fee</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Medical tests (HIV, malaria, tuberculosis, health certificate)</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Transport to university campus</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>ECA professional fee (full admission assistance, visa guidance & immigration clearance)</td>
                        <td>1000</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mandatory visa extension after arrival + registration with police</td>
                        <td>150</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Equivalency certificate of educational documents from Ministry of Education & Science of Ukraine</td>
                        <td>200</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Obligatory medical insurance from Ukrainian insurance company</td>
                        <td>130</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <thead>
                        <th>Total</th>
                        <th>4730</th>
                        <th>2000</th>
                        <th>2000</th>
                        <th>2000</th>
                    </thead>
                  </tbody>
              </table>
              @elseif($uni->id == 2)
              <p>Cherkasy is in Central Ukraine. The city has railway station, river port and airport. The city is warmest in July (about 20 degrees Celsius) while January can reach -5degrees Celsius. Population is about 300,000.</p>

<p>This city is an important economic center of Ukraine, various industries are represented here. The most developed local industries are the chemical industry, motor industry and food industry.</p>

<p>The city has a zoo and Pine Forest Park which has waterfalls.</p>

<p>The university has students from over 18 foreign countries.</p>

<p>The university offers 50 Bachelor and 40 Master’s degree courses.</p>

<h4><u>ECONOMICS AND LAW FACULTY</u></h4>
<ul>
    <li>Department of State Service, Public Administration and Political Science </li>
    <li>Department of State and Legal Disciplines</li>
    <li>Department of Economy of Enterprise, Accounting and Audit</li>
    <li>Department of Economics and International Economic Relations </li>
    <li>Department of Intellectual Property and the Civil Law Disciplines </li>
    <li>Department of Management and Economic Security </li>
    <li>Department of Economy and Business Modelling </li>
    <li>Department of Tourism and Hotel and Restaurant Business</li>
</ul>
<br>
<h4><u>INFORMATIONAL AND EDUCATIONAL TECHNOLOGIES FACULTY</u></h4>
<ul>
    <li>Department of Automation and Computer Integrated Technologies </li>
    <li>Department of Physics </li>
    <li>Department of Applied Mathematics and Computer Studies </li>
    <li>Department of Mathematics and Methods of Teaching Mathematics </li>
    <li>Department of Algebra and Calculus</li>
</ul>
<br>
<h4><u>NATURAL AND AGRARIAN SCIENCES</u></h4>
<ul>
    <li>Department of Cell Biology and Teaching Methods of Biological Disciplines </li>
    <li>Department of Biology, Ecology and Agrotechnology </li>
    <li>Department of Chemistry and Nanomaterial Studies </li>
    <li>Department of Quality, Standardization and Project Management</li>
</ul>
<br>
<h4><u>COMPUTING ENGINEERING, INTELLECTUAL AND MANAGEMENT SYSTEMS FACULTY</u></h4>
<ul>
    <li>Department of Automated Systems Software </li>
    <li>Department of Information Technologies </li>
    <li>Department of Intelligent Decision-Making Systems</li>
</ul>
<br>
<h4><u>PSYCHOLOGY DEPARTMENT</u></h4>
<ul>
    <li>Department of Psychology </li>
    <li>Department of Psychology, In-Depth Correction and Rehabilitation </li>
    <li>Department of Applied Psychology</li>
</ul>
<br>
<h2><u>Fees Breakdown in USD</u></h2>
<table class="table table-bordered">
    <thead>
        <th></th>
        <th>Year 1</th>
        <th>Year 2</th>
        <th>Year 3</th>
        <th>Year 4</th>
    </thead>
    <tbody>
        <tr>
            <td>Yearly Tuition Fee</td>
            <td>1500</td>
            <td>1500</td>
            <td>1500</td>
            <td>1500</td>
        </tr>
        <tr>
          <td>Yearly hostel fee</td>
          <td>360</td>
          <td>360</td>
          <td>360</td>
          <td>360</td>
      </tr>
      <tr>
          <td>Application fee</td>
          <td>1250</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Visa Support Invitation Letter</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Entry visa stamping fee</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Medical tests (HIV, malaria, tuberculosis, health certificate)</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Transport to university campus</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>ECA professional fee (full admission assistance, visa guidance & immigration clearance)</td>
          <td>1000</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Mandatory visa extension after arrival + registration with police</td>
          <td>150</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Equivalency certificate of educational documents from Ministry of Education & Science of Ukraine</td>
          <td>200</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <tr>
          <td>Obligatory medical insurance from Ukrainian insurance company</td>
          <td>130</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
      </tr>
      <thead>
          <th>Total</th>
          <th>4590</th>
          <th>1860</th>
          <th>1860</th>
          <th>1860</th>
      </thead>
    </tbody>
</table>

              @endif
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection