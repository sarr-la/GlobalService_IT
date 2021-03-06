@extends("layouts.app")
@section("content")
<div class="owl-carousel-wrapper">
<div class="box-92819 shadow-lg p-3 mb">
    <div>
      <h1 class=" mb-3 text-black">Sous-traitance IT</h1>
      <p><marquee>Global Service of IT, toujours plus proche de vous pour apporter des solutions qui repondent a vos besoins de developpement informatiques...</marquee></p>
      <p class="mb-0 mt-4"><a href="{{route('service')}}" class="btn btn-primary">Realisez votre projet</a></p>
    </div>
</div>

<div class="owl-carousel owl-2 ">
  <div class="ftco-cover-1" style="background-image: url('images/itGS.jpg');"></div>
  <div class="ftco-cover-1" style="background-image: url('images/man.jpg');"></div>
  <div class="ftco-cover-1" style="background-image: url('images/best.jpg');"></div>
  
</div>
</div>  

<div class="site-section">
<div class="container">

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">Services</h2>
          </div>
          <div class="col-md-5 text-right">
            <p class="mb-0"><a href="{{route('service')}}" class="more-39291">Tous nos services</a></p>
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
              <h3><a href="#">Application web</a></h3>
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
            <p class="text-white">Nous assurons l'analyse, la conception, le d??veloppement et la gestion des sites Web et fournit des services de d??veloppement d'applications
la s??curit?? des donn??es applicatives et des donn??es de serveur ainsi que la protection de l'environnement informatique contre les virus, les pirates informatiques et les menaces analogues...
</p>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/dv.jpeg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Code propre</a></h3>
              <p>Pour un code propre, il faut avoir de l'exp??rience et la patience d'aller toujours plus loin dans sa recherche. Notre equipe dit:  ?? Mais aussi coder bien et propre demande d'??tre intelligent et d'avoir du talent.?? C'est ce qui nous differrencie des autres!</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/resp.jpg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Design et infographie</a></h3>
              <p>L???harmonie ne s???obtient pas qu???en musique. Mais ?? une combinaison sp??cifique formant un ensemble dont les ??l??ments divers et s??par??s se trouvent reli??s dans un rapport de convenance, lequel apporte ?? la fois satisfaction et agr??ment ??. C???est exactement ce que notre equipe vous offre dans le graphisme.</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/coaching.svg')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Agilite</a></h3>
              <p>Notre m??thode de travail s???appuie sur une ??coute attentive du client d'une rigueur que l'on obtient lors de la concr??tisation de nombreux projets afin d'optimiser la gestion de ces derniers et l'organisation des differents services au sein d'une entreprise avec 3 qualites essentielles: simplicite, flexibilite et pertinence.</p>
            </div>
          </div>

          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/Digital-Marketing.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Marketing digital</a></h3>
              <p>Si vous avez besoin d???atteindre un large public, que vous d??sirez pouvoir interagir sur les r??seaux sociaux, nous vous proposons un d??veloppement web incluant des connexions avec tous les grands r??seaux actuels (Facebook, LinkedIn, Twitter, Google+???</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/codind.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Responsivite</a></h3>
              <p>En am??liorant sans cesse le syst??me de visualisation des informations et les diverses interactions utilisateurs, une exp??rience d???exception est propos??e ?? l???utilisateur.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{ asset('fonts/flaticon/svg/dployment.png')}}" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#">Deploiement</a></h3>
              <p>Tout au long de son cycle de vie, votre application disposera d'un expert d??di?? au sein de notre ??quipe. Cette personne sera en charge d'assurer son am??lioration continue, une application ??tant un investissement ?? long terme, mais offrant ??galement l'opportunit?? de rapporter des dividendes ?? long terme.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

@endsection