<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        // instanciando objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com';
        $fornecedor->uf = 'pb';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //método create
        Fornecedor::create([
            'nome'  => 'Fornecedor 200',
            'site'  => 'fornecedor200.com',
            'uf'    => 'pb',
            'email' => 'contato@fornecedor200.com.br',
        ]);

        DB::table('fornecedores')->insert([
            'nome'  => 'Fornecedor 300',
            'site'  => 'fornecedor300.com',
            'uf'    => 'PE',
            'email' => 'contato@fornecedor300.com.br',
        ]);
    }
}
