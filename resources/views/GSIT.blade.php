
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
          <div class="col-lg-3">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/Case-study-759x400.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Analyse et Conception</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/webmobileapp.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Application web mobile</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/Socialmedia-pm.png')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Marketing digital</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="{{ asset('images/designinfraph.jpg')}}" alt="Image" class="img-fluid"></a>
              <h3><a href="#">Design et Infographie</a></h3>
              <span>Dakar, Senegal</span>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section bg-primary">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12">
            <h2 class="heading-39291 text-white mb-3">Ce que nous faisons</h2>
            <p class="text-white">Nous assurons l'hébergement, la conception, le développement et la gestion des sites Web et fournit des services de développement d'applications
la sécurité des données applicatives et des données de serveur ainsi que la protection de l'environnement informatique contre les virus, les pirates informatiques et les menaces analogues...
</p>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/dv.jpeg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Code propre</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/resp.jpg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Design et infographie</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/coaching.svg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Agilite</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/Digital-Marketing.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Marketing digital</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/codind.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Responsivite</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/dployment.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Deploiement</a></h3>
              <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    

@endsection