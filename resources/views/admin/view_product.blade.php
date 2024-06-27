<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type= "text/css">
     .div_deg
     {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
     }   
     .table_deg
     {
        border: 5px solid white;
     }
     th
     {
        background-color: purple;
        color: white;
        font-size: 25px;
        font-weight: bold;
        padding: 15px;
     }
     td
     {
        border: 1px solid purple;
        text-align: center;
     }
    </style>
  </head>
  <body>
   @include('admin.header')
   @include('admin.Sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
             <div class= "div_deg">
                <table class= "table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>   
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>delete</th>                     
                    </tr>
                    @foreach($product as $products)
                    <tr>
                        <td>{{$products->title}}</td>

                        <td>{{$products->description}}</</td>

                        <td>{{$products->category}}</</td>

                        <td>{{$products->price}}</</td>

                        <td>{{$products->quantity}}</</td>
                
                        <td>
                          <img height="200" width="200" src="products/{{$products->image}}">
                        </td>
                        <td>
                          <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                        </td>

                     <td>
                        <a class="btn btn-danger" onClick="confirmation(event)" href="{{url('delete_product',$products->id)}}">delete</a>
                     </td>
                    </tr> 
                    @endforeach
                  </table>
               
                   
             </div> 
             <div class = "div_deg">
             {{$product->links()}} 

            </div>  
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>