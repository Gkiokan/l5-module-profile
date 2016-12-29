<?php

namespace Gkiokan\Profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
      'firstname', 'lastname', 'bday',
      'street', 'plz', 'city', 'state', 'country',
      'tel', 'fax', 'mobil'
    ];

    public function user(){
        return $this->belongsTo('\App\User');
    }

    public static function find($user_id){
        return self::where('user_id', $user_id);
    }
}
