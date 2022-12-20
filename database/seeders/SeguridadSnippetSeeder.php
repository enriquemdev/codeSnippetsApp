<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguridadSnippetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposSeguridad = [
            'Público',
            'Quien tenga el link',
            'Solo yo',
        ];

        foreach ($tiposSeguridad as $tipo)
        {
            DB::table('seguridad_snippets')->insert([
                'tipo' => $tipo,
            ]);
        }
        
    }
}
