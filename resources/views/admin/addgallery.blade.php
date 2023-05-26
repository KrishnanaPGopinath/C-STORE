@extends('admin.header')
@section('admin')


<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Add Gallery</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="addgalleryaction" enctype="multipart/form-data">
               @csrf
              <div class="card-body">
                <label for="text">Name</label>
                <input class="form-control form-control-sm" type="text" name="name" placeholder="enter the  name"></input>
                <label for="file">Images</label>
                <input type="file" class="form-control form-control-sm" id="file" name="file">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ADD IMAGES</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>











@endsection