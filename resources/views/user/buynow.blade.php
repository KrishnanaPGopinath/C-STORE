@extends('user.header')
@section('user')
<div class="container-fluid">
    
        <form method="post" action="/buynowaction">
            @csrf
            <div class="row">
            <div class="col-sm-6" style="background-color: white; height:800px">

                <h1>Billing Details:</h1>
                <table>

                    <tr>

                        <td>
                            <label for="">First name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" style="height:40px;width:400px"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Last name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" style="height:40px;width:400px"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">City</label>
                        </td>
                        <td>
                            <input type="text" name="city" id="city" style="height:40px;width:400px"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">State</label>
                        </td>
                        <td>
                            <input type="text" name="state" id="state" style="height:40px;width:400px"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Address</label>
                        </td>
                        <td>
                            <textarea name="address" id="" cols="52" rows="7" placeholder="Enter your address"></textarea><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Postal code</label>
                        </td>
                        <td>
                            <input type="number" name="pincode" id="pincode" style="height:40px;width:400px">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">PAYMENT METHOD</label>
                        </td>
                        <td>
                            <select name="method" id="method" style="height:40px;width:400px">
                                <option value="" default>---select---</option>
                                <option value="cashondelivery">CASH ON DELIVERY</option>
                                <option value="onlinepayment">ONLINE PAYMENT</option>
                            </select>

                        </td>
                    </tr>
                    <br>

                </table>

            </div>

            <div class="col-sm-6" style="background-color: white; height:800px">
                <h1>Order Details:</h1>
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                    <thead>
                        <tr>
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
                            <input type="hidden" id="id" value="{{$value->id}}">
                            <td>{{$value->pname}}</td>
                            <td>{{$value->pprice}}</td>
                            <input type="hidden" id="pprice" value="{{$value->pprice}}">
                            <td> <img src='image/{{$value->file}}' style="height:50px; width:60px;"></td>
                            <td>{{$value->totalamount}}</td>
                            
                            <td >{{$value->quantity}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                TotalAmount:@foreach($sum as $value) <input class="form-control" name="totalamount" id="totalamount" value="{{$value->total}}" style="width:150px;background-color:lightgrey;">@endforeach
                <input type="submit" class="btn btn-primary" value="CHECKOUT">

            </div>
            </div>
        </form>

    
</div>
@endsection