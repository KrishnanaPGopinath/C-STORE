<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>userindex</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3//css/font-awesome.css">
   <!-- fonts -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0//css/font-awesome.min.css">
   <!--  -->
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <link rel="stylesheet" href="/css/owl.carousel.min.css">
   <link rel="stylesoeet" href="/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body style="font-family: Times New Roman" ;>

   <div class="banner_bg_main ">
      <!-- header top section start -->
      <div class="container">
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo">
                        <a href="/">
                           <h1 style="color:white" ;>HE & SHE WORLD</h1>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section ">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/">Home</a>
                     <a href="/products">Products</a>
                     <a href="/viewcart">viewcart</a>
                     <a href="/vieworder">vieworders</a>
                     <a href="/myprofile">MyProfile</a>
                     <a href="/logout">logout</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="/images/toggle-icon.png"></span>
                  <div class="header_box">
                     <div class="lang_box ">

                        <div class="dropdown-menu ">

                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">

                           </li>
                           <li><a href="#">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span class="padding_10">Cart</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- header section end -->
      </div>
   </div>
   @yield('user')


   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="/js/jquery.min.js"></script>
   <script src="/js/popper.min.js"></script>
   <script src="/js/bootstrap.bundle.min.js"></script>
   <script src="/js/jquery-3.0.0.min.js"></script>
   <script src="/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="/js/custom.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>