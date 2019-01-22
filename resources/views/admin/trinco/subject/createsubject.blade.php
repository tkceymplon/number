      



      @extends('admin.template')
@section('content') 
 <script type="text/javascript">
      var i=1;
      $(document).on('click', '.addService', function(){
        i++;
    var html ='<div class="input-group mb-3" style="margin-top: 30px;"> <input type="text" class="form-control" placeholder="Enter your course....." name="subject[]" ></div>           <div class="input-group mb-3" style="margin-top: 30px;">                       <input type="text" class="form-control" placeholder="Enter your course....." name="code[]" ></div>';



    $('.ral').append(html);
});
    </script>
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">{{$course->name}}</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <form action="/subject" method="POST">
          {{csrf_field()}}

<div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Level</label>
            </div>
 <select class="custom-select" id="inputGroupSelect01" name="level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
           
          </select>          </div>
          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Semi</label>
            </div>
 <select class="custom-select" id="inputGroupSelect01" name="semi">
            <option value="1">First semester</option>
            <option value="2">Secount semester</option>
            
           
          </select>          </div>
                          <input type="hidden" class="form-control" placeholder="" value="{{$course->id}}" name="course" readonly="">

           

          <div class="input-group mb-3" style="margin-top: 30px;">
           
            <input type="text" class="form-control" placeholder="Enter  course....." name="subject[]" >
           
          </div>
           <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
             
            </div>
            <input type="text" class="form-control" placeholder="Enter  coursecode....." name="code[]" >

          </div>
          <div class="ral"></div>
                      <a class=" addService btn btn-primary">Add More</a>

           

                    <a class="btn btn-default" href="/course"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
        </form>                        
                </div>
             
        </div>
    </div>
</div>
@stop



