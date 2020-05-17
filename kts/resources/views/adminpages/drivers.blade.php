@extends('admin_main')
@section('title',' | Drivers')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
          <h1 class="h3 mb-2 text-gray-800">Delivery Personnel</h1>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <a class="btn btn-primary" href="/addDriver">+ Add Delivery personnel</a><br>
          </div><br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total number:{{ $deliverers->count() }}</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Route</th>
                      <th>Vehicle</th>
                      <th>Mobile Number</th>
                      <th>Age</th>
                       <th>Gender</th>
                      <th>Salary</th>
                      <th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Route</th>
                      <th>Vehicle</th>
                      <th>Mobile Number</th>
                      <th>Age</th>
                       <th>Gender</th>
                      <th>Salary</th>
                      <th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     @foreach($deliverers as $deliverer ) 
                    <tr>
                      <td>{{ $deliverer->name }}</td>
                      <td>{{ $deliverer->staff_id_no }}</td>
                      <td>{{ $deliverer->duty }}</td>
                      <td>{{ $deliverer->vehicle }}</td>
                      <td>{{ $deliverer->number }}</td>
                      <td>{{ $deliverer->age }}</td>
                      <td>{{ $deliverer->gender }}</td>
                      <td>{{ $deliverer->salary }}</td>
                      <td><div class="row">&emsp;{!! Html::linkRoute('employees.edit','Edit',array($deliverer->id),array('class'=>'btn btn-primary btn-sm')) !!}&emsp;
                       {!! Form::open(array('route'=>array('employees.destroy',$deliverer->id),'method'=>'DELETE')) !!}
                    {!! Form::submit('Remove',array('class'=>'btn btn-danger btn-sm')) !!}
                    {!! Form::close() !!}</div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection