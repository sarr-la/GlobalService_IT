<table class="table table-striped">
@foreach($Devi as $Devi)
<tr>
<th>{{$Devi->type}}</th>
<th>{{$Devi->adresse}}</th>
<th>{{$Devi->nom}}</th>
    <th>{{$Devi->objet}}</th>
    <th>{{$Devi->email}}</th>
    <th>{{$Devi->numero_de_telephone}}</th>

<th>{{$Devi->votre_message}}<br>
 {{
$Devi->Devi->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
</table>