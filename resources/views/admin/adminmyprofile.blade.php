@extends('admin.header')
@section('admin')


<div class="content-wrapper" style="min-height: 2171.6px;">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">

            <!-- /.card-header -->
            <!-- form start -->
            @foreach($result as $value)
            <form method="post" action="/adminmyprofileaction/{{$value->id}}">
              @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" value="{{$value->email}}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" value="{{$value->password}}">
                </div>
                <div class="card-footer">
                  <button type="submit" value="UPDATE">UPDATE</button>
                </div>
              </div>
            </form>
            @endforeach
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!--/.col (right) -->
    </div>
  </section>
  <!-- /.content -->
</div>





@endsection