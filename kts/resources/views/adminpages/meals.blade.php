@extends('admin_main')
@section('title', '| Meal Packages')
@section('content')
     <div class="row">
        <div class="col-md-9">
            <h1>&emsp;Meal Packages</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('meals.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">+ Add New Package</a>
        </div>
        <div class="col-md-12">	
            <hr>
        </div>    
     </div>
     <!--end of row-->
     <div class="row">
         <div class="col-md-12">
             <table class="table table-striped">
                  <thead>
                  	<th>#</th>
                  	<th>Name</th>
                  	<th></th>
                    <th></th>
                  </thead>
                  <tbody>
                  	@foreach($meals as $meal )           
                    <tr>
                    	<th>{{ $meal->id }}</th>
                    	<td>{{ $meal->meal_name }}</td> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><div class="row">&emsp;{!! Html::linkRoute('meals.show','View',array($meal->id),array('class'=>'btn btn-light btn-sm')) !!}&emsp;
                        {!! Html::linkRoute('meals.edit','Edit',array($meal->id),array('class'=>'btn btn-light btn-sm')) !!}&emsp;
                       {!! Form::open(array('route'=>array('meals.destroy',$meal->id),'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-light btn-sm')) !!}
                    {!! Form::close() !!}</div></td>
                    </tr>
                  	@endforeach
                  </tbody>
             </table>
         </div>	
     </div>
@endsection