<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
    <style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items:center;
        margin-top: 60px;
    }
    label
    {
        display: inline-block;
        width: 250px ;
        font-size: 18px !important;
        color: white !important;
    }

    input[type="text"]
    {
        width: 300px;
        height: 50px;
    }
    .textarea
    {
        width: 450px;
        height: 80px
    }
    .input_deg
    {
        padding: 15px;
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
            
          <h1 style="color: white;">Add products</h1>
        <div class="div_deg">

            <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="input_deg">product title</label>
                    <input type="text" name="title" require>
                </div>
                <div>
                    <label class="input_deg">description</label>
                    <textarea name="description" require></textarea>
                </div>
                <div>
                    <label class="input_deg">price</label>
                    <input type="text" name="price" require>
                </div>
                <div>
                    <label class="input_deg">quantity</label>
                    <input type="text" name="qty" require>
                </div>
                <div>
                    <label class="input_deg">product category</label>
                    <select name="category" require>
                        <option>select</option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="input_deg">product image</label>
                    <input type="file" name="image" require>
                </div>
                <div>
                    
                    <input class="btn btn-success "type="submit" value="Add product" require>
                </div>
            </form>
        </div>







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