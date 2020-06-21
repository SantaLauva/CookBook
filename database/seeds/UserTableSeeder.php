<?php

use App\User;
use Illuminate\Database\Seeder;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array('id' => 1, 'name' => 'Santa', 'username' => 'Santa', 'email' => 'santa@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('santasanta')));
        User::create(array('id' => 2, 'name' => 'Janis', 'username' => 'Janis', 'email' => 'janis@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('janisjanis')));
        User::create(array('id' => 3, 'name' => 'Mike', 'username' => 'Mike', 'email' => 'mike@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('mikemike')));
        User::create(array('id' => 4, 'name' => 'Leo', 'username' => 'Leo', 'email' => 'leo@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('leoleo')));
        User::create(array('id' => 5, 'name' => 'Susan', 'username' => 'Susan', 'email' => 'susan@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('susansusan')));
    }
}
