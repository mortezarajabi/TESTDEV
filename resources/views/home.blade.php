<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <title>Test Dev</title>
  
  @foreach($tags as $tag) 
  <meta name="{{ $tag->name }}" content="{{ $tag->content }}">
  @endforeach

  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{  asset('css/testdev.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="{{ asset('js/navbar-ontop.js') }}"></script>
  <!-- Script: Animated entrance -->
  <script src="{{ asset('js/animate-in.js') }}"></script>
<style>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="d-block img-fluid" src="{{ asset('assets/primary@2x.png') }}" width="121px" height="15px"></div>
      </div> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav py-1">
          <li class="nav-item mx-2"> <a class="nav-link" href="#projects">Projects</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#sus">Sustainability</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#collective">Collective</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#approach">Our Approach</a> </li>
          <li class="nav-item mx-2" style=""> <a class="nav-link" href="#contact">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="pt-5">
    <div class="container-fluid w-100">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="{{ asset('assets/beach-dog-man.png') }}">
              <div class="carousel-caption text-left px-3">
                <h5 class="m-0">Better Living for a Better Future</h5>
                <a href="#">Explore Ruskin Elwood</a>
              </div>
            </div>
            <div class="carousel-item "> <img class="d-block img-fluid w-100" src="{{ asset('assets/illustration.png') }}">
              <div class="carousel-caption text-left px-3">
                <h5 class="m-0">Thinking Strategically to Achieve Better</h5>
                <a href="#">Explore Sustainability</a>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block img-fluid w-100" src="{{ asset('assets/02.png') }}">
              <div class="carousel-caption text-left px-3">
                <h5 class="m-0">Attn. Sustainably-Minded Businesses</h5>
                <a href="#">Book a Workshare Desk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="py-5 text-center" id="approach">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9 text-left px-3">
          <p class="lead headline"> {{ $contents->where('title', 'Approach')->count() ? $contents->where('title', 'Approach')->first()->body : '' }} </p>
          <a href="#" class="CTA">Explore our Approach</a>
        </div>
      </div>
      <div class="row">
        <div class="text-left">
        </div>
      </div>
    </div>
  </div>
  <div class="" id="projects">
    <div class="container-fluid no-gutters">
      <div class="row my-3 no-gutters">
        <div class="col-md-9  offset-md-3
align-self-center text-md-left">
          <img class="img-fluid d-block animate-in-right animate-in-done" src="{{ asset('assets/render-01@2x.jpg') }}">
          <p class="img-paragraph pr-5 mt-3">{{ $contents->where('title', 'Projects')->count() ? $contents->where('title', 'Projects')->first()->body : '' }}</p>
          <a href="#" class="CTA">Explore Projects</a>
        </div>
      </div>
    </div>
  </div>
  <div class="" id="projects">
    <div class="container-fluid">
      <div class="row my-3">
        <div class="text-md-left col-md-6 text-left" id="sus">
          <img class="animate-in-left img-fluid animate-in-done" src="{{ asset('assets/illustration@2x.jpg') }}">
          <p class="img-paragraph mt-3">{{ $contents->where('title', 'Sustainability')->count() ? $contents->where('title', 'Sustainability')->first()->body : '' }}</p>
          <a href="#" class="CTA">Explore Sustainability</a>
        </div>
      </div>
      <div class="row my-3 pb-5" id="collective">
        <div class="offset-md-7 col-md-5">
          <img class="d-block animate-in-right img-fluid animate-in-done" src="{{ asset('assets/01@2x.png') }}">
          <p class="img-paragraph mt-3">{{ $contents->where('title', 'Collective')->count() ? $contents->where('title', 'Collective')->first()->body : '' }}</p>
          <a href="#" class="CTA">Explore Collective</a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-light" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="mt-3 col-md-6">
          <p class="headline">Our responsibility is to leave our cities and regions in a better condition than we found them. </p>
        </div>
        <div class="offset-md-5 col-md-1"><img class="img-fluid d-block floot-right my-3" src="{{ asset('assets/secondary@2x.png') }}" style=""></div>
      </div>
      <div class="row">
        <div class="p-4 col-md-6">
          <form>
            <fieldset class="form-group"> <label for="exampleInputEmail1" class="footer-text">Welcome to HIP V. HYPE. If you would like more information on how we are helping to shape better cities and regions, please sign up. </label> </fieldset> <button type="submit" class="btn btn-outline-dark">Submit</button>
          </form><i class="fa fa-long-arrow-right pull-right d-inline" style="position: relative;
    top: 30px;"></i>
          <div class="form-group"><input type="email" class="form-control bg-dark border-right-0 border-top-0 border-left-0" placeholder="Email Address"></div>
        </div>
        <div class="text-white col-md-2 pt-4">
          <h5>Contact <i class="fa fa-long-arrow-right"></i></h5>
          <p class="footer-address">293 Barkly Street<br>Brunswick VIC 3000<br><span style="text-decoration: underline;">T. (03) 8060 1252</span></p>
          <p class="footer-address">12/7 Greville StreetByron Bay NSW 2481<br><span style="text-decoration: underline;">T. (03) 8060 1252</span></p>
        </div>
        <div class="col-md-2 pt-4">
          <h5>Follow <i class="fa fa-long-arrow-right"></i></h5>
          <a href="#" class="footer-address">Facebook</a><br>
          <a href="#" class="footer-address">Instagram</a><br>
          <a href="#" class="footer-address">LinkedIn</a><br>
          <a href="#" class="footer-address">News</a><br>
        </div>
        <div class="col-md-2 pt-4">
          <h5>links <i class="fa fa-long-arrow-right"></i></h5>
          <a href="#" class="footer-address">Sustainability Matters</a><br>
          <a href="#" class="footer-address">Indigenous Recognition Matters</a><br>
          <a href="#" class="footer-address">A Fair Workplace Matters</a><br>
          <a href="#" class="footer-address">Privacy Matters</a><br>
          <a href="#" class="footer-address">Website T&amp;C’s</a><br>
          <ul class="list-unstyled"> <a href="#" class="text-dark">Home</a> <br> <a href="#" class="text-dark">About us</a> <br> <a href="#" class="text-dark">Our services</a> <br> <a href="#" class="text-dark">Stories</a> </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="{{ asset('js/smooth-scroll.js') }}"></script>  
</body>
</html>