<div class="content-wrapper" style="min-height: 2171.6px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
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
              <h3 class="card-title">Registered one</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" value="{{$value->email}}">
                </div>
                <div class="form-group">
                  <label for="text">Name</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{$value->name}}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{$value->password}}">
                </div>
                <div class="form-group">
                  <label for="text">Address</label>
                  <textarea class="form-control" id="address" name="address" value="{{$value->address}}"></textarea>
                </div>
                <div class="form-group">
                  <label for="number">PhoneNo</label>
                  <input type="number" class="form-control" id="title" name="title" value="{{$value->phoneno}}">
                </div>

                <!-- /.card-body -->


            </form>
          </div>
          <!-- /.card -->
        </div>


      </div>
      <!--/.col (right) -->
    </div>
  </section>
</div>