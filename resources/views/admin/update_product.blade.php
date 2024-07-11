<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <base href="/public">
    @include('admin.css')
    <style>
        .div_center{
            width:50%;
            margin:auto;
            text-align:left;
            padding-top: 20px;

        }
        .font_size{
            font-size: 40px;
            padding-top:40px;
        }
        .text_color{
            color:black;
            padding-bottom: 20px;
        }
        label{
            display:inline-block;
            width: 300px;
        }
        .div_design{
            padding-bottom:15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="div_center">
                    <h1 class="font_size">Update Product</h1>

               <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">     

                @csrf
                    <div class="div_design">
                        <label for="">Product title :</label>
                        <input class="text_color" type="text" name="title" placeholder="Enter a product title" required="" value="{{$product->title}}">
                    </div>

                    <div class="div_design">
                        <label for="">Product description :</label>
                        <input class="text_color" type="text" name="description" placeholder="Enter a product description"  required="" value="{{$product->description}}">
                    </div>

                    <div class="div_design">
                        <label for="">Product price :</label>
                        <input class="text_color" type="number" name="price" placeholder="Enter a product price" required="" value="{{$product->price}}">
                    </div>

                    
                    <div class="div_design">
                        <label for="">Discount price :</label>
                        <input class="text_color" type="number" name="dis_price" placeholder="Enter a product discount price" required="" value="{{$product->discount_price}}">
                    </div>
                    
                    <div class="div_design">
                        <label for="">Product quantity :</label>
                        <input class="text_color" type="number" min="0" name="quantity" placeholder="Enter a product quantity" required="" value="{{$product->quantity}}">
                    </div>

                    <div class="div_design">
                        <label for="">Product Category :</label>
                        <select class="text_color" name="catagory" required="">
                            <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
                            @foreach($catagory as $catagory)
                            <option>{{$catagory->catagory_name}}</option>
                            @endforeach
                           
                        </select>
                    </div>

                    <div class="div_design">
                        <label for=""> Current Product Image :</label>
                        <img style="margin:auto;" width="100px;" height="100px;" src="/product/{{$product->image}}" alt="">
                    </div>

                    <div class="div_design">
                        <label for=""> Change Product Image Here :</label>
                        <input type="file" name="image" >
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Update Product" class="btn btn-primary" >
                    </div>
                </form>

                </div>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>