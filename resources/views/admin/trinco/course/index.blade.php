

    

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
                <a href="{{ route('course.create') }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"><i class="fa fa-plus"></i> New Course</a>
        </div>
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
                  <th>Action</th>
                  <th>Subjects</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($datas as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->name}}</td>
                  <td>

                    <form action="{{route('course.destroy',$data->id)}}" method="post">
                      @csrf
                      @method('DELETE')

                      
                      <a href="{{route('course.edit',$data->id)}}" class="btn btn-sm btn-success">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      
                      <button class="btn btn-sm btn-danger ajax-delete" data-set="tr" type="submit" onclick="return confirm('Do you want to delete?')">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <a href="{{route('subject.show',$data->id)}}" class="btn btn-sm btn-info">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{route('course.show',$data->id)}}" class="btn btn-sm btn-info">
                        <i class="fa fa-edit"></i>
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