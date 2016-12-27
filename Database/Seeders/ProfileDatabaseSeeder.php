<?php

namespace Gkiokan\Profile\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use Gkiokan\Profile\Profile;

class ProfileDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        if(User::find(1) == false ):
            $u = new User;
            $u->username = "magic";
            $u->email    = 'gkiokan@hotmail.de';
            $u->password = bcrypt('test');
            $u->save();
        endif;

        if(Profile::find(1) == false):
            $p = new Profile;
            $p->firstname = "G";
            $p->lastname  = "Magic";

            $p->street    = "Am Stutenanger 6";
            $p->plz       = 85764;
            $p->city      = "Oberschleißheim";
            $p->state     = "Bayern";
            $p->country   = "Germany";

            $p->tel       = 123;
            $p->fax       = 5555;
            $p->mobil     = 6666;

            $p->user_id   = 1;
            $p->save();
        endif;
        // $this->call("OthersTableSeeder");
    }
}
