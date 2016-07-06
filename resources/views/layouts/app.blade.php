

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        LatinTutorial 
      
    </title>

    
      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
      <link href="{{ asset('css/all.css') }}" rel="stylesheet">
 	  <script src="{{ asset('/js/jquery.js') }}"></script>
	  <script src="{{ asset('/js/all.js') }}"></script>
  
</head>
<body>
@include('includes.analyticstracking')
@yield('content')

@yield('footer')
@include('includes.footer')

  </body>
</html>
