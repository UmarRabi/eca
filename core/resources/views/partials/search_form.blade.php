<form method="GET" action="{{route('search')}}">
  <div class="row">
      <div class="form-group col-md-4 col-sm-12">
          <label class="sr-only" for="inlineFormInput">Name</label>
          <select id="country" class="form-control" name="country">
            <option value="">-- SELECT COUNTRY --</option>
            @foreach($countries as $country)
              <option value="{{$country->code}}">{{$country->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group col-md-4 col-sm-12">
          <label class="sr-only" for="inlineFormInput">Name</label>
          <select class="form-control" name="university">
              <option value="">-- SELECT UNIVERSITY --</option>
              @foreach($universities as $university)
                  <option value="{{$university->id}}">{{$university->name}}</option>
              @endforeach
          </select>
      </div>
      <div class="col-md-4 col-sm-12 form-group">
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
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#country').on('change', function(){
        console.log(this.value);
      })
  })
      document.querySelector('#country').addEventListener('change', function(){
        console.log(this.value)
      })
</script>