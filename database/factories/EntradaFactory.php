<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entrada;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
{
    protected $model = Entrada::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->lexify(str_repeat('?', 50)), // Genera un titulo con 50 caracteres aleatorios
            'tag' => $this->faker->word,        // Genera una sola palabra para el tag
            'imagen' => $this->faker->word,     // Genera una sola palabra para la imagen
            'contenido' => $this->faker->paragraph, // Genera un parrafo de contenido
            'user_id' => User::inRandomOrder()->first()->id, // obtener un user_id aleatorio de la tabla User
        ];
    }
}
