<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class NewsFactory extends Factory
{
    public function definition(): array
    {
        // for the last week
        $days = rand(-7,0);

        return [
            'name' => fake()->text(30),
            'text' => fake()->text(100),
            'created_at' => Carbon::now()->addDays($days)
        ];
    }
}
