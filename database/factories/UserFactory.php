<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $user = User::factory()->create(); // Créer d'abord l'utilisateur
        return [
//            'name' => fake()->name(),
//            'id' => str()->uuid(),
            'name' => $this->faker->name(),
            'id' => $this->faker->uuid(), // Générer un UUID aléatoire//            'email' => fake()->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => static::$password ??= Hash::make('password'),
//            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'text' => $this->faker->sentence,
            'created_at' => now(),
//            'user_id' => User::factory(), // Utiliser la factory pour créer un utilisateur et récupérer son ID
        ]);
    }
}
