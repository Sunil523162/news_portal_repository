<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    public function definition()
    {
        $post_category_id = PostCategory::pluck('id')->toArray();
        return [
            'heading' => $this->faker->sentence(),
            'sub_heading' => $this->faker->sentence(),
            'feature_image' => $this->faker->image(),
            'auther' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'post_date' => $this->faker->date(),
            'post_time' => $this->faker->time(),
            'description' => $this->faker->paragraph(),
            'is_popular' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
            'post_category_id' => $this->faker->randomElement($post_category_id),
        ];
    }
}
