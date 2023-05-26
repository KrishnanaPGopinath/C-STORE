@extends('header')
@section('index')

<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Contact</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
              </div>
              <form method="post" action="contactusaction">
               @csrf
              <div class="card-body">
                <label for="text">Name</label>
                <input class="form-control form-control-sm" type="text" name="name" placeholder="enter the  name"></input>
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email">
                <label for="text">Message</label>
                <textarea  class="form-control" name="message" id="message"></textarea>
                <label for="text">Contact</label>
                <input type="text" class="form-control form-control-sm" id="contact" name="contact">
              </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
</form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection