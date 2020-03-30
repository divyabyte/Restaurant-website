@section('title')
   Law-gate - Restaurants  
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
                <a class="navbar-brand" href="#">Eumsig</a>
                <span class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/res-law">Change Location</a>
                <a class="dropdown-item" href="/user-profile">Profile</a>
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

        <div class="slider-item" style="background-image: url('../assets/img1/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Enjoy Your Meal</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url('../assets/img1/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Delecious Food</h1>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 

    <div class="mt-5">
      <h1 class="text-center font-weight-bold"><pre>Restaurants</pre></h1>
    </div>



    <div class="section container mt-2 py-5 ">
      <div class="row">
        @foreach($users as $row)
        
        @if($row->location == 'law-gate')
      
          <div class="col-md-4 col-sm-6">
            <a href="res-view/{{ $row->id }}">
               <div class="card card-block mt-4 ml-4">
               <h5 class="card-title mt-3 mb-3 text-uppercase text-center font-weight-bold">{{ $row->name}}</h5>
               <div class="container">
               <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
               </div>
                  @if($row->category == 'veg')
                     <p class="text-success text-center">veg</p>
                  @else
                     <p class="text-danger text-center">non-veg</p>
                  @endif
               </div>
            </a>
          </div>

        @endif
        @endforeach
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