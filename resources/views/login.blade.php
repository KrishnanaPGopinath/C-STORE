@extends('header')
@section('index')
<body>
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Login Form</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/loginaction">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" >
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="login" >LOGIN</button>
                </div>
              </form>
            </div>
</body>
@endsection