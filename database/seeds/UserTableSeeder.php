<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\UserInformation as UserInfo;

class UserTableSeeder extends Seeder {

    public function run() {
        //User::truncate();

        User::create([
            'id' => 1,
            'email' => 'jrizzle8888@gmail.com', 
            'password' => Hash::make('admin123'), 
            'first_name' => 'Joshua', 
            'last_name' => 'Riley',
            'points' => 5, 
            'role' => 'super_admin', 
            'valid_license' => 1,
            'license_type' => 4,
            'active' => 1
        ]);
        User::create([
            'id' => 2,
            'email' => 'mikeisrain@gmail.com', 
            'password' => Hash::make('admin123'), 
            'first_name' => 'Michael', 
            'last_name' => 'Gamble',
            'points' => 10, 
            'role' => 'super_admin', 
            'valid_license' => 1,
            'license_type' => 4,
            'active' => 1
        ]);
        User::create([
            'id' => 3,
            'email' => 'admin@admin.com', 
            'password' => Hash::make('admin123'), 
            'first_name' => 'Admin', 
            'last_name' => 'Admin',
            'points' => 10, 
            'role' => 'admin', 
            'valid_license' => 1,
            'license_type' => 3,
            'active' => 1
        ]);
        User::create([
            'id' => 4,
            'email' => 'freelancer@freelancer.com', 
            'password' => Hash::make('freelancer123'), 
            'first_name' => 'Freelancer', 
            'last_name' => 'Freelancer',
            'points' => 10, 
            'role' => 'freelancer', 
            'valid_license' => 1,
            'license_type' => 2,
            'active' => 1
        ]);
        User::create([
            'id' => 5,
            'email' => 'subscriber@subscriber.com', 
            'password' => Hash::make('subscriber123'), 
            'first_name' => 'Subscriber', 
            'last_name' => 'Subscriber',
            'points' => 10, 
            'role' => 'subscriber', 
            'valid_license' => 1,
            'license_type' => 1,
            'active' => 1
        ]);
        User::create([
            'id' => 6,
            'email' => 'user@user.com', 
            'password' => Hash::make('user123'), 
            'first_name' => 'User', 
            'last_name' => 'User',
            'points' => 10, 
            'role' => 'user', 
            'valid_license' => 0,
            'license_type' => 0,
            'active' => 1
        ]);
        
        // users information
        UserInfo::create([
            'id' => 1,
            'user_id' => 1,
            'address_1' => '12 Here There',
            'city' => 'Nederland',
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
        
        UserInfo::create([
            'id' => 2,
            'user_id' => 2,
            'address_1' => '12 Here There',
            'city' => 'Port Neches',
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
        
        UserInfo::create([
            'id' => 3,
            'user_id' => 3,
            'address_1' => '12 Here There',
            'city' => 'Port Arthur', 
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
        
        UserInfo::create([
            'id' => 4,
            'user_id' => 4,
            'address_1' => '12 Here There',
            'city' => 'Port Arthur', 
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
        
        UserInfo::create([
            'id' => 5,
            'user_id' => 5,
            'address_1' => '12 Here There',
            'city' => 'Port Arthur', 
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
        
        UserInfo::create([
            'id' => 6,
            'user_id' => 6,
            'address_1' => '12 Here There',
            'city' => 'Port Arthur', 
            'state' => 'TX', 
            'phone' => '409-123-1234',
        ]);
    }
}
