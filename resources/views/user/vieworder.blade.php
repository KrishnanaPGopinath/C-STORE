@extends('user.header')
@section('user')
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-5">
            <table>
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
                        <td>{{$value->pname}}</td>
                        <td>{{$value->pprice}}</td>
                        <td> <img src='image/{{$value->file}}' style="height:50px; width:60px;"></td>
                        <td>{{$value->totalamount}}</td>
                        <td>{{$value->quantity}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection