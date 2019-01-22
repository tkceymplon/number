     


    

@extends('admin.template')
@section('title','List of users')
@section('css')
@stop
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="float-right">
                <a href="/attantshow" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"><i class="fa fa-plus"></i> view Attendance</a>
        </div>
        <div class="card-title">List of Course</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <form action="/att" method="post">
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
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Course</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="course">
           @foreach($course as $cou)
          <option value="{{$cou->id}}">{{$cou->name}}</option>
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

@push('script')
<script>
  $(document).ready(function(){
    datatableJs();
  });
</script>
@endpush

@stop




        