<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    protected $model = Message::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = $this->faker->uuid();

        // Check if a user with the given ID exists
        if (!User::where('id', $userId)->exists()) {
            // If not, create a new user
            User::factory()->create(['id' => $userId]);
        }

        return [
            'text' => $this->faker->sentence,
            'created_at' => now(),
            'user_id' => $userId, // Use the ID of the existing or created user
        ];
    }
}
