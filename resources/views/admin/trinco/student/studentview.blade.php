   
      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>{{$year->acc_year}} Year Students </div>
            <a class="btn btn-default" href="/student"> <i class="ion-ios-arrow-thin-left"></i> Back</a>

</div>
 
<div class="card card-default">
    <div class="card-header">
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
                   <table class="table table-striped">
                @foreach($datas as $data)

         <tr>
           <td>
         <a href="/student/{{$data->id}}">   {{$data->name}}</a> 
           </td>
            <td>
             {{$data->reg_no}}
           </td>
       
           <td><a href="/student/{{$data->id}}/edit"><i class="fa fa-edit"></i> Edit<a>
</td>

<td><form action="/student/{{$data->id}}" method="post">
  {{csrf_field()}}
          {{method_field("delete")}}
<button class="btn btn-sm btn-danger ajax-delete" data-set="tr" type="submit" onclick="return confirm('Do you want to delete?')">
                        <i class="fas fa-trash-alt"></i>
                      </button>
  
</form>
</td>
         </tr>
         @endforeach
       </table>
        </div>
    </div>
</div>

 
@stop

      



