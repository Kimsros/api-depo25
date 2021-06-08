<?php

namespace Database\Factories;

use App\Models\comment_type;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = comment_type::class;

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
