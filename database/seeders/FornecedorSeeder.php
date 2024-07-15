<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Database\Factories\FornecedoresFactory;
use Illuminate\Support\Facades\DB;


class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        Fornecedor::factory()->count(100)->create();
    }
}
