@extends('admin_main')
@section('title',' | Cleaners')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
           <div class="row">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Cleaners</h1>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <a class="btn btn-primary" href="/addCleaner">+ Add Cleaner</a><br>
          </div><br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total number:{{ $cleaners->count() }}</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Duty</th>
                      <th>Mobile Number</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Salary</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Duty</th>
                      <th>Mobile Number</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Salary</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($cleaners as $cleaner ) 
                    <tr>
                      <td>{{ $cleaner->name }}</td>
                      <td>{{ $cleaner->staff_id_no }}</td>
                      <td>{{ $cleaner->duty }}</td>
                      <td>{{ $cleaner->number }}</td>
                      <td>{{ $cleaner->age }}</td>
                      <td>{{ $cleaner->gender }}</td>
                      <td>{{ $cleaner->salary }}</td>
                      <td><div class="row">&emsp;{!! Html::linkRoute('employees.edit','Edit',array($cleaner->id),array('class'=>'btn btn-primary btn-sm')) !!}&emsp;
                       {!! Form::open(array('route'=>array('employees.destroy',$cleaner->id),'method'=>'DELETE')) !!}
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