@section('title')
   Profile  
@endsection

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Eumsig</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css1/bootstrap.css">
    <link rel="stylesheet" href="../assets/css1/animate.css">
    <link rel="stylesheet" href="../assets/css1/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css1/aos.css">
    <link rel="stylesheet" href="../assets/css1/new.css">

    <link rel="stylesheet" href="../assets/css1/magnific-popup.css">


    <link rel="stylesheet" href="../assets/fonts1/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts1/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts1/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../assets/css1/style.css">
  </head>

  <body>

    
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-dark ml-3" href="#">Eumsig</a>
                <span class="nav-item dropdown">
                <p class=" dropdown-toggle text-uppercase" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }} 
                </p>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Orders</a>
                <a class="dropdown-item" href="/user-profile-edit">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
                </div>
                </span>
            </div>
        </nav>
    </header>
    <!-- END header -->

  
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">
        <div class="slider-new-item" style="background-image: url('../assets/img/food1.png');">
      </section>
    <!-- END slider -->
    </div> 

    <div class="mt-5">
        <h1 class="text-center font-weight-bold"><pre>Profile</pre></h1>
        <hr>
        <div class="container">
            <form action="/user-profile-update/{{ Auth::user()->id }}"   method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
                </div> 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/user-profile" class="btn btn-danger"> Cancel </a>
            </form>
        </div>
    </div>

    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="../assets/js1/jquery-3.2.1.min.js"></script>
    <script src="../assets/js1/popper.min.js"></script>
    <script src="../assets/js1/bootstrap.min.js"></script>
    <script src="../assets/js1/owl.carousel.min.js"></script>
    <script src="../assets/js1/jquery.waypoints.min.js"></script>
    <script src="../assets/js1/aos.js"></script>

    <script src="../assets/js1/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js1/magnific-popup-options.js"></script>
    

    <script src="../assets/js1/main.js"></script>
    
  </body>
</html>