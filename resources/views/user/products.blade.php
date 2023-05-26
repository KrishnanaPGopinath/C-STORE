@extends('user.header')
@section('user')

<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <h1 class="fashion_taital">Men & Women Fashion</h1>
            <div class="container">

               <div class="fashion_section_2">
                  <div class="row">
                     @foreach($result as $value)
                     <div class="col-sm-3 p-5">
                        <div class="card  text-white">

                           <center><img src="image/{{$value->file}}" height="300cm" width="300cm"></img></center>

                           <p class="price_text">Price <span style="color: #262626;">{{$value->pprice}}</span></p>

                           <center>
                              <h1 style="color:black;">{{$value->pname}}</h1>
                           </center>
                           <center><a href='/addtocart/{{$value->id}}' style="color:blue;font-size:20px;">ADD TO CART</a></td>
                           </center>
                        </div>
                     </div>

                     @endforeach
                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
</div>

@endsection