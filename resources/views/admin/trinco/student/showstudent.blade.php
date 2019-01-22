   
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
                   
    <table class="table table-striped">

         <tr>
           <td>
             Name
           </td>
           <td>
             {{$data->name}}
           </td>
         </tr>
          <tr>
            <td>
             Registation Number
           </td>

            <td>
             {{$data->reg_no}}
           </td>
            </tr>
          <tr>
            
           
            </tr>

          <tr>
            <td>
            Accadamic Year
           </td>
            <td>
             {{$year->acc_year}}
           </td>
  
         </tr>
          <tr>
            <td>
          Course
           </td>
            <td>
             {{$course->name}}
           </td>
            </tr>
       </table>
        </div>
    </div>
</div>

 
@stop

      


