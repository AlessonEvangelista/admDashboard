<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'name' => 'Veronica Acessoria de comunicação',
        ]);
        Empresa::create([
            'name' => 'Paulispan',
        ]);
    }
}
