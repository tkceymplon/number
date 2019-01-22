      

      

    

@extends('admin.template')
@section('title','List of users')
@section('css')
@stop
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="float-right">
                <a href="{{ route('acc_year.create') }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Academic year"><i class="fa fa-plus"></i> New Academic year</a>
        </div>
        <div class="card-title">List of Academic Year</div>
    </div>
    
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="table-responsive">
                <table datatable  class="table display nowrap">
                    <thead>
                            <tr>
                  <th>Academic Year</th>
                 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
       <table class="table table-striped">
         <tr>
           <td>
            {{$data->acc_year}}
           </td>
       
           <td><a href="/acc_year/{{$data->id}}/edit"><i class="fa fa-edit"></i> Edit<a>
</td>


<td> <form action="{{route('acc_year.destroy',$data->id)}}" method="post">
                      @csrf
                      @method('DELETE')

                      
                      
                      
                      <button class="btn btn-sm btn-danger ajax-delete" data-set="tr" type="submit" onclick="return confirm('Do you want to delete?')">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
</td>
         </tr>
       </table>
@endforeach


                        </tbody>
                
                    </table>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
  $(document).ready(function(){
    datatableJs();
  });
</script>
@endpush

@stop