  


      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new user</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
        <form action="/attview" method="post">
         {{csrf_field()}}
        
        <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="year">
          @foreach($year as $yea)
          <option value="{{$yea->id}}">{{$yea->acc_year}}</option>
          @endforeach
          </select>
        </div>
       
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Subject</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="subject">
           @foreach($subject as $cou)
          <option value="{{$cou->id}}">{{$cou->subject_name}}</option>
          @endforeach

          </select>
        </div>

          <div class="input-group mb-3" style="margin-top: 15px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Date</label>
            </div>
            <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="date">
          </div>
         
          <div class="row" style="margin-top: 70px;">
            <div class="col-2">
          <button type="submit" class="btn btn-secondary mt-5" style="background-color: #008080;">go</button>
        </div><div class="col-10"></div>
          </div>
            </form>

        </div>
    </div>
</div>
@stop



