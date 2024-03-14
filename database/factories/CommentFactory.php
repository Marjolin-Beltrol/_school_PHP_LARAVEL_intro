<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $messageId = $this->faker->uuid();
        $userId = $this->faker->uuid();

        // Check if a message with the given ID exists
        if (!Message::where('id', $messageId)->exists()) {
            // If not, create a new message
            Message::factory()->create(['id' => $messageId]);
        }
        // Check if a user with the given ID exists
        if (!User::where('id', $userId)->exists()) {
            // If not, create a new user
            User::factory()->create(['id' => $userId]);
        }

        return [
            'text' => $this->faker->sentence,
            'created_at' => now(),
            'message_id' => $messageId, // Use the ID of the existing or created message
            'user_id' => $userId, // Use the ID of the existing or created user
        ];
    }
}
