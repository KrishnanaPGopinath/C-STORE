@extends('header')
@section('index')

<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <center>
            <h1>Registration Form</h1>
          </center>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">


          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/registeraction">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter your name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="enter your email address">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="address" class="col-sm-2 col-form-label">Address:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="address" name="address" placeholder="enter your address"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="number" class="col-sm-2 col-form-label">Phone No:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="phoneno" name="phoneno" min="0">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer row">
                <div class="col-sm-6"><button type="submit" class="btn btn-info w-100">Register</button></div>
                
                <div class="col-sm-6"><button type="submit" class="btn btn-default w-100">Clear</button></div>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection