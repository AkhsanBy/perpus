<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->randomNumber(5, true), 
            'name' => $this->faker->firstName(), 
            'birth_place' => $this->faker->city(), 
            'date_of_birth' => $this->faker->date('d/m/Y'), 
            'gender' => $this->faker->randomElement(['Male', 'Female']), 
            'prodi' => $this->faker->randomElement(['TI', 'SI', 'MI'])
        ];
    }
}
