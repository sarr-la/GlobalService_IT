@extends("layouts.app")
@section("content")

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">Services</h2>
          </div>
          <div class="col-md-5 text-right">
            <p class="mb-0"><a href="#" class="more-39291">Tous nos services</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/Case-study-759x400.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Analyse Conception</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/webmobileapp.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Application web</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/mobil.jpeg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Application mobile</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/designinfraph.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Design graphique</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/webmobileapp.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Application web</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/Socialmedia-pm.png')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Marketing digital</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>


        </div>
      </div>
    </div>

    @endsection