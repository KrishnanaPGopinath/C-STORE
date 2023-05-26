@extends('user.header')
@section('user')
<!-- banner section start -->
<div class="banner_section layout_padding">
   <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="banner_taital">Get Start <br>Your favorite shoping</h1>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- banner section end -->
</div>
<!-- banner bg main end -->
<!-- fashion section start -->
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

                           <h1 style="color:black;">{{$value->pname}}</h1>
                           <a href='/' style="color:blue;font-size:20px;">ADD TO CART</a></td>
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

<!-- fashion section end -->

<div class="footer_section layout_padding">
   <div class="container">
      <div class="footer_logo"><a href="index.html">
            <h1 style="color:white" ;>HE & SHE WORLD</h1>
         </a></div>
      <div class="input_bt">

      </div>
      <div class="footer_menu">
         <ul>
            <li>Best Sellers</li>
            <li>Gift Ideas </li>
            <li>New Releases</li>
            <li>Today's Deals</li>
            <li>Customer Service</li>
         </ul>
      </div>

   </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">© 2023 All Rights Reserved. Design by krishnana</p>
   </div>
</div>
@endsection