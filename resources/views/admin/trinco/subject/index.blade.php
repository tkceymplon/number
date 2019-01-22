      

    

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
                <a href="/course" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"> back</a>
        </div>
        <div class="card-title">List of Course</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="table-responsive">
                <table datatable  class="table display nowrap">
                    <thead>
                            <tr>
                  <th>Subject Name</th>
                  <th>Subject code</th>
                  <th></th>
                             <th></th>

                            </tr>
                        </thead>
                        <tbody>
                                          @foreach($sub as $data)

         <tr>
           <td>
             {{$data->subject_name}}
           </td>
            <td>
             {{$data->subject_code}}
           </td>
       
           <td><a href="/subject/{{$data->id}}/edit"><i class="fa fa-edit"></i> Edit<a>
</td>

<td><form action="/subject/{{$data->id}}" method="post">
  {{csrf_field()}}
          {{method_field("delete")}}
 <button class="btn btn-sm btn-danger ajax-delete" data-set="tr" type="submit" onclick="return confirm('Do you want to delete?')">
                        <i class="fas fa-trash-alt"></i>
                      </button>  
</form>
</td>
         </tr>
         @endforeach                        </tbody>
                
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