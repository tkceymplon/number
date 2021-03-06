

    

@extends('admin.stu')
@section('title','List of users')
@section('css')
@stop
@section('content')
<div class="content-heading">
    <div>Course</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        
        <div class="card-title">List of Course</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="table-responsive">
                <table datatable  class="table display nowrap">
                    <thead>
                            <tr>
                             <th>Id</th>
                  <th>Course Name</th>
                  <th>Subjects</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($datas as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->name}}</td>
                  <td>

                   
                  <td>
                    <a href="subject_detail/{{$data->id}}" class="btn btn-sm btn-info">
                      <i class="fa fa-eye"></i>
                    </a>
                    

                  </td>
                </tr>
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