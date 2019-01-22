<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\{
    Role,
    Permission,
    Module
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->role = 'Admin';
        $admin->reg = 001;

        $admin->save();

       
    }

    private function createUser()
    {
       
        
    }
}
