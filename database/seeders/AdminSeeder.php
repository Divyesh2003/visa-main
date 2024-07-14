<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert(array(
            array('id' => '1','name' => 'Admin','email' => 'admin@gmail.com','password' => Hash::make('Admin@123'),'is_admin'=> 1),
          ));
    }
}
