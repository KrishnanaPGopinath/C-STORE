@extends('user.header')
@section('user')
<html>

<body>
    <div class="row">
        <div class="col-md-4">
            @foreach($result as $value)
            <form method="post" action="/addtocartaction/{{$value->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row" style="height:600px;width:200px;margin:auto;">
                    <div class="col-sm-12" style="background-color: lightgrey; height:500px;">
                    <tr>
                        <td>
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" value="{{$value->id}}" readonly>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <center><input type="text"  id="name" name="pname" value="{{$value->pname}}" readonly></center>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <img src='/image/{{$value->file}}' id="file" style="height:160px; width:160px;">
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            Price: <input type="text"  id="pprice" name="pprice" value="{{$value->pprice}}">
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            Quantity:<input type="number" class="quantity" name="quantity" id="quantity" min="1">
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            Total: <input type="text"  id="totalamount" name="totalamount" readonly>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <button type="submit" value="addtocart" style="color:white;font-size:20px;background-color:blue;">ADD TO CART</button>
                        </div>
                        </td>
                    </tr>
                    </div>
                </div>
            </form>
            @endforeach
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

        $(document).ready(function () {
            $("#quantity").on('change',function () 
            {
                $('#totalamount').val(($('#pprice').val() * $('#quantity').val()))
            })
         })
    });
</script>
</div>
</div>
</body>

</html>
@endsection