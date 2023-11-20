<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $admin = [
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 1,
                'address' => 'Dhaka',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 2,
                'address' => 'Khulna',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'user_id' => 3,
                'address' => 'Rajshahi',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],


        ];

        Admin::insert($admin);
    }


}
