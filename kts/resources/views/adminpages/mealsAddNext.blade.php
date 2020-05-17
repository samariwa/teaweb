@extends('admin_main')
@section('title', '| Meal Packages')
@section('content')
    {!! Html::style('css/parsley.css')!!}
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
      tinymce.init(
      {
          selector: 'textarea',
          plugins: 'link code',
          menubar: false,
      });
    </script>
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <h1>&emsp;Add New Package</h1>
        </hr>
        <!--you can do the 'file'=>true in the form helpers if you want to be able to upload files in forms. This can be done in the normal form tags as follows <form action="..." method="POST" enctype="multipart/form-data">-->
            {!! Form::model($meal,['route'=>['meals.update',$meal->id],'method'=>'PUT']) !!}
            <div style="padding-left: 20px;">
              {{ Form::label('meal_id', 'Meal Id:') }}
              {{ Form::text('meal_id',$meal->id,array('class'=>'form-control','required'=>'', 'readonly' => 'true','maxlength'=>'255'))}}
             {{ Form::label('ingredients', 'Ingredients:') }}
             {{Form::textarea('ingredients',null,array('class'=>'form-control'))}}<br>
             {{ Form::label('method', 'Method:') }}
             {{Form::textarea('method',null,array('class'=>'form-control'))}}
             {{Form::submit('Create Package',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
             </div>
        {!! Form::close() !!}
    </div>
  </div>    

@endsection