<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class ActorFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'slug' => str()->slug($name),
        ];
    }
}
