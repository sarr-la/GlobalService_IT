<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'numero_de_telephone',
        'votre_message',
    ]; 

}
