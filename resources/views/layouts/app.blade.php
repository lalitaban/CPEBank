<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>{{ $title }} - Resturant</title>
    @yield('header')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="alert alert-secondary" role="alert">
        <font size='6'>{{ $title }}</font> 
          </div>

      </div>
      <div class="col-md-2"></div>

      </div>
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        @yield('content')

      </div>
      <div class="col-md-2"></div>

      </div>
    </div>

        @yield('script')

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Latest compiled and minified JavaScript -->
        
      </body>
</html>