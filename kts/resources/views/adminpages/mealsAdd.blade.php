@extends('admin_main')
@section('title', '| Meal Packages')
@section('content')
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <h1>&emsp;Add New Package</h1>
        </hr>
        <!--you can do the 'file'=>true in the form helpers if you want to be able to upload files in forms. This can be done in the normal form tags as follows <form action="..." method="POST" enctype="multipart/form-data">-->
            {!! Form::open(['route'=>'meals.store', 'method'=>'STORE', 'files' => true, 'role' => 'form', 'data-parsley-validate'=>'']) !!}
            <div style="padding-left: 20px;">
             {{ Form::label('Name', 'Name:') }}
             {{ Form::text('Name',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('Category', 'Category ID:') }}
             {{ Form::number('Category',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             <div class="row">
              <div class="col">
             {{ Form::label('type_id', 'Food Type ID:') }}
             {{ Form::number('type_id',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
              <br>
              </div>
              <div class="col">
             {{ Form::label('detail', 'Order Detail:') }}
             {{ Form::text('detail',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
              <br>
              </div>
             </div>
            
             {{Form::submit('Next',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
             </div>
        {!! Form::close() !!}
    </div>
  </div>    

@endsection