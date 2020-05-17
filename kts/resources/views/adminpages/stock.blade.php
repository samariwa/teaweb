@extends('admin_main')
@section('title', '| Meal Packages')
@section('content')
     <div class="row">
        <div class="col-md-9">
            <h1>&emsp;Stock</h1>
            <div class="row">
         <div class="col-md-12">
             <table class="table table-striped">
                  <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Buying price/unit</th>
                    <th>Seling price/unit</th>
                    <th>Quantity available</th>
                  </thead>
                  <tbody>
                    @foreach($stock as $stock )           
                    <tr>
                      <th>{{ $stock->id }}</th>
                      <td>{{ $stock->order_name }}</td> 
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
                      <td>{{ $stock->buying_price }}</td>
                      <td>{{ $stock->selling_price }}</td>
                      <td>{{ $stock->quantity }}</td> 
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
             </table>
        </div>
        
     </div>
@endsection