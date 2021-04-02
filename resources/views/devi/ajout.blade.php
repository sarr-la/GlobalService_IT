@extends("layouts.app")
@section("content")



    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif


    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <form action="{{route('store_Devi')}}" method="post">
@csrf
<div>
<input type="text" name="type" class="form-control" placeholder="Entreprise ou particulier">
</div>
<div>
<input type="text" name="adresse" class="form-control" placeholder="Adresse excacte">
</div>
<div>
<input type="text" name="nom" class="form-control" placeholder="Nom">
</div>
    <div>
        <input type="text" name="objet" class="form-control" placeholder="Objet">
    </div>
    <div>
        <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <div>
        <input type="text" name="numero_de_telephone" class="form-control" placeholder="Telephone">
    </div>
<div>
<input type="text" name="votre_message" class="form-control" placeholder="Entrer votre message">
</div>
<div>
<button class="btn btn-primary">Envoyer</button>
</div>
</form><div class="container">

@endsection