<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
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
                'user_id' => 4,
                'uuid' => 'exampleofuuid',
                'address' => 'Dhaka',
                'ip_address' => '127.0.0.1',
                'mac_address' => 'linux',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
        ];

        Vendor::insert($data);
    }
}
