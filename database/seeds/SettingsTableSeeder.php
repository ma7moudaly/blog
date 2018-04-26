<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => "Laravel's Blog",
            'contact_number' => '1234 5678 1234',
            'contact_email' => 'info@laravel_blog.com',
            'address' => 'Egypt,Hurgada'
        ]);
    }
}
