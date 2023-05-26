@extends('admin.header')
@section('admin')






<div class="content-wrapper" style="min-height: 2080.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>USERTABLE</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">

                        </div>
                        <div class="col-sm-12 col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc">ID</th>
                    <th class="sorting">NAME</th>
                    <th class="sorting">EMAIL</th>
                    <th class="sorting">PASSWORD</th>
                    <th class="sorting">ADDRESS</th>
                    <th class="sorting">PHONENO</th>
                 </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->phoneno}}</td>
                  </tr>
                  @endforeach
                </tbody>
                  
                </table>
            </div>
            </div>
        </div>
            </div>
        </div>
        
        
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>








@endsection