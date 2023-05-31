<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Profile;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role= Role::create([
        	'name'=>'customer',
        	'description'=>' customer Role'
        ]);
        $role= Role::create([
        	'name'=>'admin',
        	'description'=>' admin Role'
        ]);
        $user= User::create([
        	'name'=>'customer',
        	'description'=>' customer Role'
        ]);
    }
}
