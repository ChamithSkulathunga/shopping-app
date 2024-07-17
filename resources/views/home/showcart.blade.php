<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>
        .center{
            margin:auto;
            width:50%;
            text-align:center;
            padding:30px;
        }
        table{
            margin-top:30px;
        }
        table,th,td{
            border: 1px solid gray;
        }
        .hero_area{
            min-height 300px;;
        }
        .img_size{
            width:80px;
            height:auto;
        }
        .totle_deg{
            font-size:20px;
           

        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
            @include('home.header')
         <!-- end header section -->
         @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                @endif
         <table class="center">
             <tr>
                 <th>Product title</th>
                 <th>Product quantity</th>
                 <th>Price</th>
                 <th>Image</th>
                 <th>Action</th>
             </tr>

             <?php $totalprice=0; ?>

             @foreach($cart as $cart)
             <tr>
                 <td>{{$cart->product_title}}</td>
                 <td>{{$cart->quantity}}</td>
                 <td>${{$cart->price}}</td>
                 <td><img class="img_size" src="/product/{{$cart->image}}" alt=""></td>
                 <td>{{$cart->Product_title}}</td>
                 <td><a onclick="return confirm('Are you sure to remove this prooduct ?')" class="btn btn-danger" href="{{url('/remove_cart',$cart->id)}}">Remove product</a></td>
             </tr>

             <?php $totalprice=$totalprice + $cart->price ?>

             @endforeach
         </table>
         <div class="center">
             
             <div>
                <h1 class="totle_deg">Totle price : ${{$totalprice}}</h1>
             </div>
             <div>
                <h1 class="mb-4">Proceed to Order</h1>
                <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on delivery</a>
                <a href="" class="btn btn-danger">Pay using Card</a>
             </div>
         </div>

    </div>
      
      

      
         @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>