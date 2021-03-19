
@extends("layouts.app")
@section("content")

<div class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="{{route('store_Contact')}}" method="post">
            @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                </div>
                <div class="col-md-6">
                  <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div>
                 <input type="text" name="numero_de_telephone" class="form-control" placeholder="Telephone">
            </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="votre_message" class="form-control" placeholder="Entrer votre message" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Envoyer">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="heading-39291">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black small text-uppercase font-weight-bold">Addresse:</span>
                  <span>Rue 10x29, MEDINA, DAKAR</span></li>
                <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">telePhone:</span><span>+221773096782/+221767844404</span></li>
                <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span>sarrabdoulayeyakhine7@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    

@endsection