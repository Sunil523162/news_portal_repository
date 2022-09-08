<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postCategories = [
            ['name' => 'Politics'],
            ['name' => 'Business'],
            ['name' => 'Techs'],
            ['name' => 'Science'],
            ['name' => 'Education'],
            ['name' => 'Health'],
            ['name' => 'Sports'],
            ['name' => 'Culture'],
            ['name' => 'News'],
        ];

        foreach ($postCategories as $key => $value) {
            PostCategory::create($value);
        }
    }
}
