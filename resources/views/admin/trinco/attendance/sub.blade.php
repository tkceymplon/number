    

      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new user</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
              <form action="/attant" method="post">
         {{csrf_field()}}
        
       

          <div class="input-group mb-3" style="margin-top: 15px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Select Subject</label>
            </div>
           <select class="custom-select" id="inputGroupSelect01" name="subject">
           @foreach($data as $sub)
          <option value="{{$sub->id}}">{{$sub->subject_name}}</option>
          @endforeach

          </select>
          </div>
           <div class="input-group mb-3" style="margin-top: 15px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Lec Hour</label>
            </div>
           <select class="custom-select" id="inputGroupSelect01" name="lec_hour">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>

          </select>
          </div>
<input type="hidden"  value="{{$request->year}}" name="year">
<input type="hidden" value="{{$request->course}}" name="course">
<input type="hidden" value="{{$request->date}}" name="date">

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



