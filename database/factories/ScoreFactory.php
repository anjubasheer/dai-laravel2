<?php

namespace Database\Factories;
use App\Models\Score;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{

    protected $model = Score::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {

        return [



            'name' => $this->faker->name(),

            'marks'=> $this->faker->marks(),
        ];
    }
}
