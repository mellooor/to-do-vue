<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoItemFactory extends Factory
{
    /**
     * @var int
     */
    private int $priority = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(),
            'priority' => $this->priority++,
        ];
    }
}
