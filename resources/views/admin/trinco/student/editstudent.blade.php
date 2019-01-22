       
      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>{{$year->acc_year}} Year Students </div>
    <form action="/studentview" method="post">
                      @csrf

                      <input type="hidden" value="{{$year->id}}" name="year">
                <button class="btn btn-sm btn-primary ajax-delete" data-set="tr" type="submit">
                        back
                      </button>
</form>
</div>
 
<div class="card card-default">
    <div class="card-header">
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
                  
        <form action="/student/{{$data->id}}" method="POST">
          {{csrf_field()}}
            {{method_field("put")}}

          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Name</label>
            </div>
            <input type="text" class="form-control" placeholder="Enter Name" value="{{$data->name}}" name="name" >
          </div>

 <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Course</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="course">

        <option value="{{$course->id}}">{{$course->name}}</option>
          </select>
        </div>

           <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Reg_No</label>
            </div>
            <input type="text" class="form-control" placeholder="Enter Name" value="{{$data->reg_no}}" name="reg_no" >
          </div>
            <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01"  name="year">
                                  <option value="{{$year->id}}">{{$year->acc_year}}</option>

          @foreach($datas as $yea)

          <option value="{{$yea->id}}">{{$yea->acc_year}}</option>
          @endforeach
          </select>
        </div>
        

                    <button class="btn btn-primary">Save</button>
</form>
          
        </div>
    </div>
</div>

 
@stop

      


