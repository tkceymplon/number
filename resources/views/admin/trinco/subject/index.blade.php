      

    

@extends('admin.template')
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
                <a href="/course" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"> back</a>
        </div>
        <div class="card-title">List of Subject</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="table-responsive">
                <table datatable  class="table display nowrap">
                    <thead>
                    <th>Level</th>      
                    <th>Semester</th>      
                        
                  <th>Subject Name</th>
                  <th>Subject code</th>
                  <th></th>
                             <th></th>

                            </tr>
                        </thead>
                        <tbody>
                                          @foreach($grouped as $data=>$name)
                                          @foreach($name as $datas=>$tks)
       
 
                                    
@foreach($tks as $tk)

         <tr>
          <td> {{$tk->level}}</td>                 
 <td> {{$tk->semi}}</td>
           <td>
             {{$tk->subject_name}}
           </td>
            <td>
             {{$tk->subject_code}}
           </td>
       
          
         </tr>
         @endforeach       
         @endforeach       
         @endforeach                   </tbody>
                
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