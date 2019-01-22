


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
                   <form action="/acc_year" method="POST">
          {{csrf_field()}}


          <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" placeholder="Enter your Acc_year....." name="name" >
          </div>
           

                    <a class="btn btn-default" href="/course"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
                </div>
        </form>
        </div>
    </div>
</div>
@stop



