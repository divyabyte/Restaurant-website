@section('title')
   Lpu - Restaurants  
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
                <a class="dropdown-item" href="#">Cart</a>
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


    
    <div class="sader-wrap">
      <section class="home-slider owl-carousel">
        <div class="slider-new-item" style="background-image: url('../assets/img/food1.png');">
      </section>
    <!-- END slider -->
    </div> 

    <div class="mt-5">
      <h1 class="text-center font-weight-bold"><pre>Menu</pre></h1>

      <div class="row">

      <div class="col-md-1">
      </div>

        <div class="col-md-2 text-left">
          <ul style="list-style-type: none;">
          <li><a href="#chinese" >Chinese</a><li>
            <li><a href="#quick-bites" >Quick Bites</a><li>
            <li><a href="#breads" >Breads</a><li>
            <li><a href="#dessert" >Dessert</a><li>
            <li><a href="#main-course" >Main-Course</a><li>
            <li><a href="#italian" >Italian</a><li>
            <li><a href="#thali" >Thali</a><li>
            <li><a href="#non-veg" >Non-veg</a><li>
            <li><a href="#beverage" >Beverages</a><li>
          </ul>
        </div>

        <div class="col-md-7">

          <ul style="list-style-type: none;">

            <!-- Chinese -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'chinese')
                <section id="chinese">
                  <h4>Chinese</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)     
                @if( $row->menus[$i]->type  == 'chinese')
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif              
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>
        
            <!-- Quick-Bites -->
            <ul style="list-style-type: none;">   
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'quick Bites')
                <section id="quick-bites">
                  <h4>Quick-Bites</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++) 
                @if( $row->menus[$i]->type  == 'quick Bites')         
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Breads -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'breads')
                <section id="breads">
                  <h4>Breads</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'breads')         
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Dessert -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'dessert')
                <section id="dessert">
                  <h4>Dessert</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'dessert')         
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Main Course -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'main Course')
                <section id="main-course">
                  <h4>Main-course</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'main Course')         
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Thali -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'thali')
                <section id="thali">
                  <h4>Thali</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'thali')               
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Non-veg -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'non-veg')
                <section id="non-veg">
                  <h4>Non-veg</h4>
                </section>
                <hr>
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'non-veg')         
                <div class="row pb-2" >  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Italian -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'italian')
                  <section id="italian">
                    <h4>Italian</h4>
                  </section>
                  <hr>
                  @for ($i = 0; $i < count($row->menus); $i++)
                  @if( $row->menus[$i]->type  == 'italian')         
                  <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                  @endif
                  @endfor
                  <hr>
                  @break
              @endif
              @endfor
              @endforeach
            </ul>

            <!-- Beverage -->
            <ul style="list-style-type: none;">
              @foreach($restaurant as $row)
              @for ($i = 0; $i < count($row->menus); $i++)
              @if( $row->menus[$i]->type  == 'beverage')
                <section id="beverages">
                  <h4>Beverage</h4>
                </section>
                <hr> 
                @for ($i = 0; $i < count($row->menus); $i++)
                @if( $row->menus[$i]->type  == 'beverage')         
                <div class="row pb-2">  
                    <div class="col-md-10">    
                    <li class="text-uppercase text-dark"> <pre>{{$row->menus[$i]->name}} </pre></li> </div>
                    <div class="col-md-1"> 
                    <li class="text-success">
                    <button type="submit" class="btn btn-success" ><img src="../assets/img/add.png" height="20px" width="20px"></button>
                    </li> </div>
                    <div class="col-md-1"> 
                    <li class="text-danger"><button type="submit" class="btn btn-danger"><img src="../assets/img/remove.png" height="20px" width="20px"></button>
                    </li></div>
                </div>
                @endif
                @endfor
                <hr>
                @break
              @endif
              @endfor
              @endforeach
            </ul>

          </ul>
        </div>


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