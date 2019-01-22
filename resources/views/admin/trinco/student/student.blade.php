



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

           <table class= "table">
    @for ($i=0; $i < sizeof($suba); $i++)  

             <tr>
               <td>{{$suba[$i]}}</td>
               <td>{{$persan[$i]}}</td>
                           </tr>
                           @endfor
                   </table>        
             

</div>
    </div>
</div>
@stop



