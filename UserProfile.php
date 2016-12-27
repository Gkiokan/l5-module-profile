<?php

namespace Gkiokan\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class UserProfile extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('\Gkiokan\Profile\Profile', 'user_id', 'id');
    }


}
