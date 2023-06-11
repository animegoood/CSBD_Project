<?php

namespace Database\Factories;
use App\Models\blog_single;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class blog_singleFactory extends Factory
{

    protected $model = blog_single::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

    'Blog_thumbnail'=>$this->faker->imageUrl,
    'Blog_titles'=> $this->faker->title,
    'Blog_descrioption'=> $this->faker->text,
    'Blog_highlight_description'=> $this->faker->text,
    'Blog_image'=>$this->faker->imageUrl,
    'Blog_image_description'=> $this->faker->text,

    'Blog_date'=>$this->faker->dateTime(),
    'Blog_categories'=>'tech',
    'Blog_author_image'=>$this->faker->imageUrl,
    'Blog_author_name'=>$this->faker->name,
    'Blog_author_description'=>$this->faker->text,

        ];
    }
}
