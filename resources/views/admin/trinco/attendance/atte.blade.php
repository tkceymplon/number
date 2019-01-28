        

      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header"><center><h1>{{$year->acc_year}}  {{$subject->subject_name}} attendance details  </h1></center>
        </div>
    </div>
<form action="/editattview" method="post">
    @csrf
    <input type="hidden" value="{{$date}}" name="date">
    <input type="hidden" value="{{$subject->id}}" name="subject">
    <button type="submit"  class="btn btn-primary">Edit attendance</button>

</form>

<div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="year" value="{{$year->acc_year}}" readonly="">
        </div>
       
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Course</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="course" value="{{$course->name}}" readonly="">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Subject</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="subject" value="{{$subject->subject_name}}" readonly="">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Lec_Time</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="time" value="{{$hour}}" readonly="">
        </div>

          <div class="input-group mb-3" style="margin-top: 15px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Date</label>
            </div>
            <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="{{$date}}" value="" readonly="">
          </div>
         
        
 <form action="/attendance" method="post">
         {{csrf_field()}}

  <table class="table table-striped">
                
     <thead>
       <tr>
         <td>

         </td>
         <td>
           Student_NAme
         </td>
         <td>
          Registation_Number
         </td>
       </tr>
     </thead>    



@foreach($datas as $data)

         <tr>
          <td>
            
          </td>
           <td>
             {{$data->name}}
           </td>
            <td>
             {{$data->reg_no}}
           </td>
  
         </tr>
         @endforeach
       </table>

      <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Total Student</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="year" value="{{$totalstudent}}" readonly="">
        </div>
         <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Total present</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="year" value="{{$present}}" readonly="">
        </div>
         <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">persantage</label>
          </div>
          <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="year" value="{{$persantage}}" readonly="">
        </div>
 </form>
        </div>
    </div>
@stop



