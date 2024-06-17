<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome' => $faker->nome,
        'email' => $faker->email,
        'telefone' => $faker->telefone,
        'motivo_contato' => $faker->motivo_contato,
        'mensagem' => $faker->mensagem,
    ];
});
