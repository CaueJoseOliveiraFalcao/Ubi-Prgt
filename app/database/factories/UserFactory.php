<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
if (!function_exists('generateCnpj')){
    function generateCnpj() {
        $cnpj = substr(str_shuffle(str_repeat('0123456789', 14)), 0, 14);
        return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cnpj);
    }
}
if (!function_exists('generatePhoneNumber')) {
    function generatePhoneNumber() {
        // Gera o DDD com dois dígitos
        $ddd = substr(str_shuffle('0123456789'), 0, 2);
        // Gera o número de telefone com 8 dígitos
        $phone = substr(str_shuffle('0123456789'), 0, 8);
        return "($ddd) " . substr($phone, 0, 4) . '-' . substr($phone, 4);
    }
}
class UserFactory extends Factory
{
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

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => generatePhoneNumber(),
            'cnpj' => generateCnpj(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
