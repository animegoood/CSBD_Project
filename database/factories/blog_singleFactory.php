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

    'Blog_thumbnail'=>$this->faker->image(),
    'Blog_titles'=> $this->faker->title(),
    'Blog_descrioption'=> $this->faker->text(),
    'Blog_highlight_description'=> $this->faker->text(),
    'Blog_image'=>$this->faker->image(),
    'Blog_image_description'=> $this->faker->text(),

    'Blog_date'=>$this->faker->date(),
    'Blog_categories'=>'Design',
    'Blog_author_image'=>$this->faker->imageUrl(800, 600,'https://st2.depositphotos.com/2001755/5408/i/450/depositphotos_54081723-stock-photo-beautiful-nature-landscape.jpg'),
    'Blog_author_name'=>$this->faker->name(),
    'Blog_author_description'=>$this->faker->text(),

        ];
    }
}
