<?php

namespace Gkiokan\Profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
      'firstname', 'lastname', 'bday',
      'street', 'plz', 'city', 'state', 'country',
      'tel', 'fax', 'mobil'
    ];


    public function user(){
        return $this->belongsTo('\App\User');
    }

}
