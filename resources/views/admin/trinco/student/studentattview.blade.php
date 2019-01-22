    @extends('admin.template')
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
                     <h4 style="color: #008080;">2015/CSC/031</h4></span>
                     <span></span>
                  </div>
              </div>
          </div>
          
          
        </div>

        <div class="card card-default">
                     <div class="card-header"></div>
                     <div class="card-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Subject Names</th>
                                    <th>persentage</th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Image processing</td>
                                    <td>8%5</td>
                                    
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Graphics</td>
                                    <td>75%</td>
                                    
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Commputing</td>
                                    <td>71%</td>
                                    
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- END table-responsive-->
                     </div>
                  </div>

          
</div>
    </div>
</div>
@stop
