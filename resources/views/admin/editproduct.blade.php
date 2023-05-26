@extends('admin.header')
@section('admin')

<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Products</h1>
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

@foreach($result as $value)
<form method="post" action="/editproductaction/{{$value->id}}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
                <label for="text">Product Name</label>
                <input class="form-control form-control-sm" type="text" name="pname" value="{{$value->pname}}">
                <label for="file">Product Image</label>
                <input type="file" class="form-control form-control-sm" id="file" name="file" value="{{$value->file}}">
                <img src='/image/{{$value->file}}' style="height:50px; width:60px;">
                <label for="file">Product Price</label>
                <input class="form-control form-control-sm" type="text"name="pprice" value="{{$value->pprice}}">
                <label for="text">Description</label>
                <textarea  class="form-control" name="description" id="description" value="{{$value->description}}">{{$value->description}}</textarea>
              </div>
            <div class="card-footer">
                  <button type="submit" value="UPDATE">UPDATE</button>
            </div>
</form>
@endforeach
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