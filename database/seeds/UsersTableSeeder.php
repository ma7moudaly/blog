<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  App\User::create([
            'name'     => 'Eng.Mahmoud',
            'email'    => 'ma7moudaly@hotmail.com',
            'password' => bcrypt('password') ,
            'admin'    => 1
        ]);
  
        App\Profile::create([
            'user_id'  => $user->id ,
            'avatar'   => 'uploads/avatars/1.jpg' ,
            'about'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tempora cupiditate eius enim excepturi tempore, soluta dolorem ab sunt porro provident, incidunt vero, eveniet possimus libero consequatur dolores eligendi error!' ,
            'facebook' => 'facebook.com' ,
            'youtube'  => 'youtube.com'
        ]);
    }
}
