<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $brand = [
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'No Brand',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'brand',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Apple',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Apple',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Nokia',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Nokia',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Hp',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Hp',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Dell',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Dell',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'ACI',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'ACI',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'LG',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'LG',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Fresh',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Fresh',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Lotto',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Lotto',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Easy',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Lotto',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Hatil',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Hatil',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'RFL',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'RFL',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => '1',
                'uuid'      => 'kjgfdfjzdfgjdjgiirfsg',
                'name' => 'Lenevo',
                'description' => 'This is description',
                'image' => null,
                'Slug' => 'Lenevo',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
        ];
        Brand::insert($brand);
    }
}
