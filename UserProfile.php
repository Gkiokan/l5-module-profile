<?php

namespace Gkiokan\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class UserProfile extends User
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('\Gkiokan\Profile\Profile', 'user_id', 'id');
    }

    public static function find($id){
        return self::where('id', $id);
    }

}
