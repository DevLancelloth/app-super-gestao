<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new SiteContato();

        SiteContato::create([
            'nome' => 'Sistema SG',
            'telefone' => '(11) 99999-9999',
            'email' => 'contato@sg.com.br',
            'motivo_contato' => 1,
            'mensagem' => 'Seja bem-vindo ao sistema Super Gestão',
        ]);
    }
}
