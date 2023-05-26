@extends('admin.header')
@section('admin')
<div class="content-wrapper" style="min-height: 2171.6px;">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="col-sm-6" >
                    <h1>Edit About</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                    @foreach($result as $value)
                        <form method="post" action="/editaboutaction/{{$value->id}}" >
                         @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="text">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$value->title}}">{{$value->title}}
                                </div>
                                <div class="form-group">
                                    <label for="text">Description</label>
                                    <textarea  class="form-control" name="description" id="description" value="{{$value->description}}">{{$value->description}}</textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" value="UPDATE">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection               