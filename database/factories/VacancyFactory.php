<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $factory->define(App\Models\Vacancy::class, function (Faker $faker) {
        return [
            // 'id' => $this->faker->id,
            'title' => $this->faker->name,
            'min_reward' => $this->faker->randomNumber,
            'mid_reward' => $this->faker->randomNumber,
            'max_reward' => $this->faker->randomNumber,
            'text' => $this->faker->realText,
            'desc' => $this->faker->realText,
            'requirements' => $this->faker->realText,
        ];
        // });
    }
}
