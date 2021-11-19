<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::create([
            'id'=>1,
            'name'=>'Too Easy Not Too',
            'featured'=>true,
        ]);

        BlogCategory::create([
            'id'=>2,
            'name'=>'Boring But Practical',
            'featured'=>true
        ]);

        BlogCategory::create([
            'id'=>3,
            'name'=>'Not Worth It',
            'featured'=>true
        ]);

        BlogCategory::create([
            'id'=>4,
            'name'=>"Let's Test It",
            'featured'=>true
        ]);
    }
}
