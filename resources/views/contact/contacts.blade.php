<table class="table table-striped">
@foreach($Contact as $Contact)
<tr>
<th>{{$Contact->prenom}}</th>
<th>{{$Contact->nom}}</th>
<th>{{$Contact->email}}</th>
    <th>{{$Contact->numero_de_telephone}}</th>
<th>{{$Contact->votre_message}}<br>
 {{
$Contact->Contact->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
</table>