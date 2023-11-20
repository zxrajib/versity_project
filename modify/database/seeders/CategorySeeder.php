<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = now();
        $category = [
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Fashion',
                'parent_id' => 0,
                'description' => 'This is man category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Women',
                'parent_id' => 1,
                'description' => 'This is women category',
                'image' => 'test.png',
                'Slug' => 'women',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Men',
                'parent_id' => 1,
                'description' => 'This is Men category',
                'image' => 'men.png',
                'Slug' => 'Men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Electronics',
                'parent_id' => 0,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Mobile',
                'parent_id' => 4,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Printer',
                'parent_id' => 4,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Computer Accessories',
                'parent_id' => 4,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Television',
                'parent_id' => 4,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'men',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            //parent ->8
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Food',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'food',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            //9
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Furniture',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'Furniture',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            //10
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Kitchen',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'Kitchen',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

            //11
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Health & Beauty',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'Health & Beauty',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Mens Care',
                'parent_id' => 11,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'Mens',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Women Beauty',
                'parent_id' => 11,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'Women',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Baby Care',
                'parent_id' => 11,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'Baby',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            //15

            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Computers & Desktop',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'food',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Computers',
                'parent_id' => 15,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'computers',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Desktop',
                'parent_id' => 15,
                'description' => 'This is example category',
                'image' => 'test.png',
                'Slug' => 'desktop',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],

            //18
            [
                'user_id' => 1,
                'uuid' => 'exampleofuuid',
                'name' => 'Laptop',
                'parent_id' => 0,
                'description' => 'This is category',
                'image' => 'test.png',
                'Slug' => 'Laptop',
                'created_at' => $time,
                'updated_at' => $time,
                'deleted_at' => null,
            ],


        ];

        Category::insert($category);
    }
}
