<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ['Male', 'Female'];
        return [
            'name' => $this->faker->name(),
            'gender' => $gender[$this->faker->boolean(45)],
            'dob' => $this->faker->date('Y-m-d', '2005-01-01'),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
