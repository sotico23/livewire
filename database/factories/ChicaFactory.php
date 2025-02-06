<?php

namespace Database\Factories;

use App\Models\Chica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chica>
 */
class ChicaFactory extends Factory
{
    /**
     * El nombre del modelo que corresponde a esta fábrica.
     *
     * @var string
     */
    protected $model = Chica::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apodo' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('sotico23'), // puedes usar Hash::make('password') si prefieres
            'telefono' => $this->faker->phoneNumber,
            'biografia' => $this->faker->paragraph,
            'tiempo' => $this->faker->word,
            'precio' => $this->faker->randomNumber(4),
            'pais' => $this->faker->country,
            'region' => $this->faker->state,
            'provincia' => $this->faker->city,
            'pay_metoth' => $this->faker->creditCardType,
            'fotoperfil' => $this->faker->imageUrl(400, 400, 'people'),
            'fotoportada' => $this->faker->imageUrl(1200, 600, 'nature'),
            'provider_id' => Str::random(10),
            'provider_type' => $this->faker->randomElement(['google', 'facebook']),
            'edad' => $this->faker->numberBetween(18, 40),
            'verificacion' => $this->faker->randomElement(['verificado', 'no_verificado']),
            'ranking' => $this->faker->randomElement(['silver', 'gold', 'platinum', 'vip', 'default']),
            'onlyfans' => $this->faker->url,
            'snapchat' => $this->faker->userName,
            'instagram' => $this->faker->userName,
            'web' => $this->faker->url,
            'establecimiento_id' => null, // Puedes cambiarlo si prefieres asociarlo con algún ID existente
            'establecimiento_type' => null, // Puedes cambiarlo si prefieres asociarlo con algún tipo existente
        ];
    }
}
