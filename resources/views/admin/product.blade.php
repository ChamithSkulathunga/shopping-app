<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
            text-align:center;
            padding-top: 40px;

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
            width: 200px;
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
                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>

               <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">     

                @csrf
                    <div class="div_design">
                        <label for="">Product title :</label>
                        <input class="text_color" type="text" name="title" placeholder="Enter a product title" required="">
                    </div>

                    <div class="div_design">
                        <label for="">Product description :</label>
                        <input class="text_color" type="text" name="description" placeholder="Enter a product description"  required="">
                    </div>

                    <div class="div_design">
                        <label for="">Product price :</label>
                        <input class="text_color" type="number" name="price" placeholder="Enter a product price" required="">
                    </div>

                    
                    <div class="div_design">
                        <label for="">Discount price :</label>
                        <input class="text_color" type="number" name="dis_price" placeholder="Enter a product discount price" required="">
                    </div>
                    
                    <div class="div_design">
                        <label for="">Product quantity :</label>
                        <input class="text_color" type="number" min="0" name="quantity" placeholder="Enter a product quantity" required="">
                    </div>

                    <div class="div_design">
                        <label for="">Product Category :</label>
                        <select class="text_color" name="catagory" required="">
                            <option value="" selected="">Add a category here</option>
                            @foreach($catagory as $catagory)
                            <option>{{$catagory->catagory_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="div_design">
                        <label for="">Product Image Here :</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary" >
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