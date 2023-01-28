<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="{{asset('js/jquery.dataTables.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZ4PJG0YPS"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-FZ4PJG0YPS'); </script>

</head>
<body>
<header class="main-header">
            <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">                                      
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="{{route('home')}}"  class="navbar-brand" ><img src="{{asset('images/puppy.png')}}" class="logo" alt="logo"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link" > Puppies</a></li>
                    <li class="nav-item"><a href="" class="nav-link" >PuppySpot Promise</a></li>
                    <li class="nav-item"><a href="" class="nav-link" >About Us</a></li>
                    <li class="nav-item"><a href="" class="nav-link" >Resource Center</a></li>
                    <li class="nav-item"><a href="{{route('shop')}}" class="nav-link" > Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog_list')}}"> Blog</a></li>
                </ul>
            </div>                
        </div>            
    </nav>
    <!-- End Navigation -->
</header>

