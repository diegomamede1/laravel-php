<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PessoasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'sobrenome' => $this->faker->lastName(),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->unique()->e164PhoneNumber(),
            'cpf' => $this->faker->unique()->ssn(),
        ];
    }
}
