    
      

      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Subject</div>
</div>
 
<div class="card card-default">
    <div class="card-header">
        <div class="card-title">Edit Subject - {{ $data->subject_name }}</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
                 <form action="/subject/{{$data->id}}" method="POST">
          {{csrf_field()}}
          {{method_field("put")}}

          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
             
            </div>
            <input type="text" class="form-control" placeholder="" value="{{$data->subject_name}}" name="name" >
          </div>
            <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" placeholder="" value="{{$data->subject_code}}" name="code" >
          </div>
          

          <a class="btn btn-default" href="/course"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
         </form>
        </div>
    </div>
</div>

 
@stop

      
