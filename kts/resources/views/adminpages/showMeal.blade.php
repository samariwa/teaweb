@extends('admin_main')
@section('title', "| $meal->meal_name ")
@section('content')
            <h1>&emsp;{{ $meal->meal_name }}</h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <a class="btn btn-light btn-lg" href="/meals" role="button"><span style="color: grey;"><b><< See All Meals</b></span></a>
            
            <div style="margin-left: 50px;">
            <h5>Meal #- {{ $meal->id }}</h5>
            <h5>Category #- {{ $meal->category_id }}</h5><br><br>
            <div class="row">
              <div class="col-md-4">
              <h4><b>Order Details</b></h4>
              </div>
              <div class="col-md-4">
            <h4><b>Quantity Available(Units)</b></h4>
            </div>
            </div>
            @foreach( $details->OrderDetails as $detail)
            <div class="row">
              <div class="col-md-4">
              {{ $detail->order_name }}
              </div>
              <div class="col-md-4">
              {{ $detail->quantity}}<br>
            </div>
          </div>
            @endforeach
            <br><br>
            <h4><b>Recipe</b></h4>
            <div class="row">
              <div class="col-md-4">
                <h4><b>Ingredients</b></h4>
              </div>
              <div class="col-md-4 ">
                <h4><b>Method</b></h4>
              </div> 
            </div>
            @foreach( $recipes->recipes as $recipe)
            <div class="row">
              <div class="col-md-4">
                {!! $recipe->ingredients !!}
              </div>
              <div class="col-md-4">
                {!! $recipe->method !!}
              </div>
            </div>
            </div>
            @endforeach
        @endsection
