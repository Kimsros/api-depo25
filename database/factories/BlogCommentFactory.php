<?php

namespace Database\Factories;

use App\Models\blog_comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blog_comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
