@extends('admin_main')
@section('title', '| New Cleaner')
@section('content')
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <h1>&emsp;Add New Cleaner</h1>
        </hr>
        <!--you can do the 'file'=>true in the form helpers if you want to be able to upload files in forms. This can be done in the normal form tags as follows <form action="..." method="POST" enctype="multipart/form-data">-->
            {!! Form::open(['route'=>'employees.store', 'method'=>'STORE', 'files' => true, 'role' => 'form', 'data-parsley-validate'=>'']) !!}
            <div style="padding-left: 20px;">
             {{ Form::label('Name', 'Name:') }}
             {{ Form::text('Name',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('id', 'Staff ID Number:') }}
             {{ Form::number('id',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('category', 'Category:') }}
             {{ Form::text('category','Cleaner',array('class'=>'form-control','required'=>'','maxlength'=>'255','readonly'))}}
             {{ Form::label('duty', 'Duty:') }}
             {{ Form::text('duty',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             <div class="row">
              <div class="col">
             {{ Form::label('number', 'Mobile Number:') }}
             {{ Form::text('number',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('age', 'Age:') }}
             {{ Form::number('age',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             <br>
              </div>
              <div class="col">
             {{ Form::label('gender', 'Gender:') }}
             {{ Form::text('gender',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             {{ Form::label('salary', 'Salary:') }}
             {{ Form::text('salary',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
             <br>
              </div>
             </div>
             {{Form::submit('Add',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
             </div>
        {!! Form::close() !!}
    </div>
  </div>    

@endsection