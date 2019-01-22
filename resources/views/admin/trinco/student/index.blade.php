



      @extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Students </div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new Student</div>
        <div class="float-right">
                <a href="{{ route('student.create') }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Add new Course"><i class="fa fa-plus"></i> New Student</a>
        </div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <form method="post" action="/studentview"> <div class="input-group mb-3" style="margin-top: 30px;">
{{csrf_field()}}
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 100px;">Year</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01"  name="year">
          @foreach($datas as $yea)
          <option value="{{$yea->id}}">{{$yea->acc_year}}</option>
          @endforeach
          </select>
        </div>
              <button class="btn btn-primary" type="submit">Find</button>


      </form>

</div>
    </div>
</div>
@stop



