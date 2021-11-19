<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rnd = rand(1, 4);
        return [
            'title'=>$this->faker->company(),
            'sub_title'=>$this->faker->company(),
            'body'=>$this->faker->sentences(75,true),
            'file_name'=>'this is file',
            'url'=>'https://via.placeholder.com/1920x500',
            'slug'=>'slugger',
            'blog_category_id'=>$rnd,
            'latest_news' => $this->faker->boolean(50),
            'likes' => $this->faker->numberBetween(0, 2400),
            'shares' => $this->faker->numberBetween(0, 250),
            'trending' => $this->faker->boolean(35),
        ];
    }
}
