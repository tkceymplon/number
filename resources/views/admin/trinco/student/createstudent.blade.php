    

      @extends('admin.template')
@section('content')
<script type="text/javascript">
      var i=1;
      $(document).on('click', '.addService', function(){
        i++;
    var html ='<div class="input-group mb-3" style="margin-top: 30px;"><div class="input-group-prepend"><label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Name</label></div><input type="text" class="form-control" placeholder="Enter Name " name="name[]" ></div><div class="input-group mb-3" style="margin-top: 30px;"><div class="input-group-prepend"><label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Reg_No</label> </div><input type="text" class="form-control" placeholder="Enter Reg Number " name="reg_no[]" >  @if ($errors->has('reg_no'))                        <span class="invalid-feedback" role="alert">                                        <strong>{{ $errors->first('reg_no') }}</strong>                                    </span>                                @endif </div><div class="input-group mb-3" style="margin-top: 30px;"><div class="input-group-prepend"><label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label></div><select class="custom-select" id="inputGroupSelect01" name="year[]">          @foreach($year as $yea)          <option value="{{$yea->id}}">{{$yea->acc_year}}</option>          @endforeach          </select>        </div> <div class="input-group mb-3" style="margin-top: 30px;">          <div class="input-group-prepend">            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Course</label>          </div>          <select class="custom-select" id="inputGroupSelect01" name="course[]">          @foreach($course as $cour)          <option value="{{$cour->id}}">{{$cour->name}}</option>          @endforeach          </select>        </div>        <div class="input-group mb-3">          <div class="input-group-prepend">              </div>         </div>';



    $('.ral').append(html);
});
    </script>
<div class="content-heading">
    <div> Students </div>
    <a class="btn btn-default" href="/student"> <i class="ion-ios-arrow-thin-left"></i> Back</a>

</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new user</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
           






        <form action="/student" method="POST">
          {{csrf_field()}}


          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Name</label>
            </div>
            <input type="text" class="form-control" placeholder="Enter Name " name="name[]" >
          </div>
           <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Reg_No</label>
            </div>
            <input type="text" class="form-control" placeholder="Enter Reg Number " name="reg_no[]" >
           @if ($errors->has('reg_no[]'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reg_no[]') }}</strong>
                                    </span>
                                @endif
          </div>
            <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="year[]">
          @foreach($year as $yea)
          <option value="{{$yea->id}}">{{$yea->acc_year}}</option>
          @endforeach
          </select>
        </div>

 <div class="input-group mb-3" style="margin-top: 30px;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Course</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="course[]" >
          @foreach($course as $cour)
          <option value="{{$cour->id}}">{{$cour->name}}</option>
          @endforeach
          </select>
        </div>

       
<div class="ral"></div>
                      <a class=" addService btn btn-primary">Add More</a>

                              <button class="btn btn-primary">Save</button>

        </form>
      
        </div>
    </div>
</div>
@stop
