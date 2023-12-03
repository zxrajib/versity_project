<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();

        $data = [
            [
                'uuid' => 'exampleofuuid',
                'name' => 'Super Admin',
                'user_name' => 'super_admin',
                'phone' => '01858721723',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 'Admin',
                'status' => 'Active',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid' => 'exampleofuuid',
                'name' => 'Admin',
                'user_name' => 'admin',
                'phone' => '01858721724',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 'Admin',
                'status' => 'Active',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid' => 'exampleofuuid',
                'name' => 'Sub Admin',
                'user_name' => 'sub_admin',
                'phone' => '018587217 25',
                'email' => 'subadmin@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 'Admin',
                'status' => 'Active',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

            [
                'uuid' => 'exampleofuuid',
                'name' => 'Vendor1',
                'user_name' => 'Vendor_1',
                'phone' => '01858721726',
                'email' => 'vendor1@gmail.com',
                'password' => Hash::make('123456'),
                'user_type' => 'Vendor',
                'status' => 'Active',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
        ];

        User::insert($data);
    }
}
