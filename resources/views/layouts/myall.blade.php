<!DOCTYPE html>
<html lang="en">

<head>
  <title>GS-IT &mdash; Global Service of Information and Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="{{route('accueil')}}" class="nav-link">Accueil</a></li>
                  <li><a href="{{route('service')}}" class="nav-link">Service</a></li>
                  <li><a href="{{route('work')}}" class="nav-link">Ce que nous faisons</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-1 text-center">
              <div class="site-logo">              
              <img src="{{ asset('fonts/flaticon/svg/keyorbsit.png')}}" alt="Image" class="img-fluid">
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="{{route('about')}}" class="nav-link">A propos</a></li>
                  <li><a href="{{route('vente')}}" class="nav-link">Vente</a></li>
                  <li><a href="{{route('devi')}}" class="nav-link">Devis</a></li>
                  <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>




@yield("content")





<div class="site-section section-4">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="slide-one-item owl-carousel">
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>Nous sommes une equipe tres experimentee, motivee et respectee!</p>
                <cite><span class="text-black">Abdoulaye SARR</span> &mdash; <span class="text-muted">CEO and Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>La croyance et l'excellence, se nourrit du reel, alors evitons l'indifference!</p>
                <cite><span class="text-black">Abdoulaye SARR</span> &mdash; <span class="text-muted">CEO and Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap">Abdoulaye SARR<span class="icon-format_quote"></span></span>
                <p> Administrateur Securite Systemes et Reseaux, Developpeur Web et Mobile!</p>
                <cite><span class="text-black"></span> &mdash; <span class="text-muted">CEO and Founder</span></cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    
    
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">A propos de nous</h2>
                <p>Nous travaillons sur la base des nouvelles technologies afin de vous offrir un développement informatique intuitif et efficient. Avec plusieurs incidences positives dont, une amélioration de votre image de marque, un renforcement de l’engagement client et de sa fidélisation...</p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Global Service of IT</h2>
                <ul class="list-unstyled">
                  <li><a href="{{route('about')}}">A propos de nous</a></li>
                  <li><a href="{{route('work')}}">Ce que nous faisons</a></li>
                  <li><a href="{{route('service')}}">Service</a></li>
                  <li><a href="{{route('vente')}}">Vente</a></li>
                  <li><a href="{{route('contact')}}">Contactez-nous!</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Veuillez cliquez sur ce lien ci-dessous pour la reception de votre devis! </h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <div class="input-group-append">
                  <p class="mb-0 mt-4"><a href="{{route('devi')}}" class="btn btn-primary"><marquee>Reponse sous 48h!</marquee></a></p>
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Suivez-nous!</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span</a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="icon-heart text-danger" aria-hidden="true"></i><a href="{{route('about')}}" target="_blank" >Global Service of IT</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('js/aos.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>

     

  </body>

</html>