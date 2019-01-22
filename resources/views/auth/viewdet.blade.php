

    

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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                <tr>
                  <td>{{Auth::user()->name}}</td>
                  <td>{{Auth::user()->email}}</td>
                  <td>{{Auth::user()->role}}</td>
                  <td>

                    
                  </td>
                  <td>
                   
                    <a href="/viewuser" class="btn btn-sm btn-info">
                        <i class="fa fa-edit"></i>
                      </a>

                  </td>
                </tr>
                        </tbody>
                
                    </table>
            </div>
        </div>
    </div>
</div>


@stop