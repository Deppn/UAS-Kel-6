<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

    <style type="text/css">
        
        input[type='text']
        {
            width: 400px;
            height:50px;
        }

        .div_deg
        {
           text-align: center;
           margin: auto;
           border: 2px solid;
           margin: top 50px;
        }
        .table_deg{
            display:flex;
           justify-content: center;
           align-items: center;
           margin:30px
        }
        th
        {
            background-color: skyblue;
            padding:15px;
            font-size: 20px;
            font-weight:bold;
            color:white;
        }
        td
        {
            color:white; 
            padding:15px;
            font-size: 20px;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </head>
  <body>
   @include('admin.header')
   @include('admin.Sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Add category</h1>
            <div class="div_deg">

            
            <form action="{{url('add_category')}}"method="post">

            @csrf

                <div>
                    <input type="text" name="category">
                
                    <input class="btn btn-primary" type="submit" value="add category">
                </div>
            </form>
        </div>

        <div>

            <table class="table_deg">
                <tr>
                    <th>category Name</th>
                 </tr>

                 <tr>
                    <td>category Name</td>
                 </tr>
            </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('toastr'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000",
            }
            toastr.success("{{ Session::get('toastr') }}");
        @endif
    </script>
  </body>
</html>