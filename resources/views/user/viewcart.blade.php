@extends('user.header')
@section('user')


<div class="content-wrapper" style="min-height: 2080.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
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
                                                    <th class="sorting">ProductName</th>
                                                    <th class="sorting">ProductPrice</th>
                                                    <th class="sorting">ProductImage</th>
                                                    <th class="sorting">TotalAmount</th>
                                                    <th class="sorting">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($result as $value)
                                                <tr>
                                                    <td tabindex="0">{{$value->id}}</td>
                                                    <input type="hidden" id="id" value="{{$value->id}}">
                                                    <td>{{$value->pname}}</td>
                                                    <td>{{$value->pprice}}</td>
                                                    <input type="hidden" id="pprice" value="{{$value->pprice}}">
                                                    <td> <img src='image/{{$value->file}}' style="height:50px; width:60px;"></td>
                                                    <td><input type="text" id="totalamount" name="totalamount" value="{{$value->totalamount}}" readonly></td>
                                                    <td><input type="number" class="quantity" name="quantity" id="quantity" min="1" value="{{$value->quantity}}"></td>
                                                    <td>
                                                        <a href='/delete/{{$value->id}}'><img src="images/delete.png"></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <tr>
                                            <td>
                                                <a href="/products" class="btn btn-primary" value="addproducts">ADDPRODUCT</a>
                                            </td>
                                            <td>
                                                <a href="/buynow" class="btn btn-primary" value="buynow">BUYNOW</a>
                                            </td><br>
                                            <td>
                                                TotalAmount:@foreach($sum as $value) <input class="form-control" name="totalamount" id="totalamount" value="{{$value->total}}" style="width:150px;background-color:lightgrey;">@endforeach
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".quantity").on('change', function() {
                                var row = $(this).closest('tr');
                                var id = parseInt(row.find("#id").val());
                                // alert(id)
                                var price = parseInt(row.find("#pprice").val());
                                // alert(price)
                                var quantity = parseInt(row.find(this).val());
                                var total = parseInt(price) * parseInt(quantity);
                                row.find('#totalamount').val(total);

                                $.ajax({
                                    type: "get",
                                    url: "/updatecart",
                                    data: {
                                        id: id,
                                        quantity: quantity,
                                        total: total
                                        // pname:$('#pname').val(),
                                        // id:$('#id').val()
                                    },
                                    success: function(result) {
                                        // alert('hi')
                                        // $('#total').html(result);
                                    }
                                })
                                //page reload method
                                location.reload(true);

                            })
                        });
                    </script>
                    <!-- /.row -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection