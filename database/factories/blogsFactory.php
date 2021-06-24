<?php

namespace Database\Factories;

use App\Models\blogs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class blogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blogs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'tittle'=>$this->faker->text(100),
            'body'=>$this->faker->text()

        ];
    }
}
