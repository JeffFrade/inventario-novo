<?php

namespace Database\Factories;

use App\Repositories\Models\Responsible;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsibleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Responsible::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'responsible' => $this->faker->firstName
        ];
    }
}
