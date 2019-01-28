      

    

@extends('admin.stu')
@section('title','List of users')
@section('css')
@stop
@section('content')
<div class="content-heading">
    <div>Subject</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="float-right">
                <a href="/course_detail" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"> back</a>
        </div>
        <div class="card-title">List of Subject</div>
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
       
         </tr>
         @endforeach                        </tbody>
                
                    </table>
            </div>
        </div>
    </div>
</div>

@stop