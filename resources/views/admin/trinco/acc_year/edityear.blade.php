
      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default">
    <div class="card-header">
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
                    <form action="/acc_year/{{$datas->id}}" method="POST">
          {{csrf_field()}}
          {{method_field("put")}}

          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
             
            </div>
            <input type="text" class="form-control" placeholder="" value="{{$datas->acc_year}}" name="acc_year" >
               @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>
                  

        <a class="btn btn-default" href="/course"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
 </form>
        </div>
    </div>
</div>

 
@stop

      
