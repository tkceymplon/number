

@extends('admin.template')
@section('content')
    <div class="content-heading">
        <div>Users</div>
    </div>

    <div class="card card-default card-demo" id="cardChart9">
        <div class="card-header"><center><h1>{{$year->acc_year}}  {{$subject->subject_name}} attendance details  </h1></center>
        </div>
    </div>
 <form action="/attendance/1" method="post">
                {{csrf_field()}}
                {{method_field("put")}}
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
                <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="subject" value="{{$subject->id}}" readonly="">
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
                <input type="date" class="form-control"  aria-label="Date" aria-describedby="basic-addon1" value="{{$date}}" name="date" readonly="">
            </div>
<br>

           
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



                    @foreach($stu as $data)

                        <tr>
                            <td>

                                @if($datasa->contains('reg_no',$data->reg_no))
                                    <div class="form-check">
                                    <input type="checkbox" name="option[]" class="form-check-input" value="{{$data->id}}" checked>
                                </div>
                                @else
                                    <div class="form-check">
                                        <input type="checkbox" name="option[]" class="form-check-input" value="{{$data->id}}" >
                                    </div>
                                @endif

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
 
<button  class="btn btn-primary">save</button>


</form>
        </div>
    </div>

@stop



