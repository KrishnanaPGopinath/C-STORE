@extends('admin.header')
@section('admin')





<div class="content-wrapper" style="min-height: 2080.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
                    <th class="sorting">productname</th>
                    <th class="sorting">Description</th>
                    <th class="sorting">productprice</th>
                    <th class="sorting">file</th>
                 </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{$value->id}}</td>
                    <td>{{$value->pname}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->pprice}}</td>
                    <td> <img src='image/{{$value->file}}' style="height:50px; width:60px;"></td>
                    <td><a href='/editproduct/{{$value->id}}'>EDIT</a></td>
                    <td><a href='/deleteproduct/{{$value->id}}'>DELETE</a></td>
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