<?php

use App\Role;
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
        
        $user1 = User::create(array('id' => 1, 'name' => 'Santa', 'username' => 'Santa', 'email' => 'santa@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('santasanta')));
        $user2 = User::create(array('id' => 2, 'name' => 'Janis', 'username' => 'Janis', 'email' => 'janis@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('janisjanis')));
        $user3 = User::create(array('id' => 3, 'name' => 'Mike', 'username' => 'Mike', 'email' => 'mike@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('mikemike')));
        $user4 = User::create(array('id' => 4, 'name' => 'Leo', 'username' => 'Leo', 'email' => 'leo@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('leoleo')));
        $user5 = User::create(array('id' => 5, 'name' => 'Susan', 'username' => 'Susan', 'email' => 'susan@tests.lv', 'email_verified_at' => now(), 'password' => bcrypt('susansusan')));
    
        $admin = Role::where('name', 'admin')->first();
        $user = Role::where('name', 'user')->first();
        
        $user1->roles()->attach($admin);
        $user2->roles()->attach($admin);
        $user3->roles()->attach($user);
        $user4->roles()->attach($user);
        $user5->roles()->attach($user);
    }
}
