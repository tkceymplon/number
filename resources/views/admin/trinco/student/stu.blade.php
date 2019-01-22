

    @extends('admin.stu')
@section('content')
<div class="content-heading">
    <div>Students </div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
       
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
                 <div class="row">
          
             <div class="col-xl col-lg" >
              <div class="card" style="">
                  <div class="card-body d-flex align-items-center">

                    <em class="fa-10x mr-5 fas fa-user-tie" style="color: #008080;"></em>
                     <span><h1 style="color: #008080;">{{Auth::user()->name}}</h1>
                     <h4 style="color: #008080;">{{Auth::user()->reg}}</h4></span>
                     <span></span>
                  </div>
              </div>
          </div>
          
          
        </div>

          
            <form method="post" action="/students"> 
              {{csrf_field()}}
               <input type="hidden" class="form-control" placeholder="Enter Name" value="{{Auth::user()->reg}}" name="reg" >
                <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Level</label>
            </div>
             <select class="custom-select" id="inputGroupSelect01" name="level">
           
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
           
          </select> </div>
           <div class="input-group mb-3" style="margin-top: 30px;">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Semi</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="semi">
           
            <option value="1">First semester</option>
            <option value="2">Secount semester</option>
            
           
          </select> </div>
    <button>save</button>
      </form>
</div>
    </div>
</div>
@stop


