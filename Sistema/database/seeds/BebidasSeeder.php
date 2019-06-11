<?php

use Illuminate\Database\Seeder;

class BebidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Fanta Uva',
            'tipo2' => '9 litros de Suco(Laranja, Tamarindo, Limão)',
            'tipo3' => '5 fardos de Refrigerante Pepsi'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Fanta Laranja',
            'tipo2' => '10 litros de Suco(Uva, Groselha, Limão e Manga)',
            'tipo3' => '5 fardos de Refrigerante Pepsi'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Coca-cola',
            'tipo2' => '6 litros de Suco(Uva, Tamarindo e Laranja)',
            'tipo3' => '5 fardos de Refrigerante Sprite'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Guaraná Antárctica',
            'tipo2' => '9 litros de Suco(Laranja, Maracujá e Manga)',
            'tipo3' => '5 fardos de Refrigerante Pepsi'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Guaraná Antárctica',
            'tipo2' => '18 litros de Suco(Laranja, Uva e Limão)',
            'tipo3' => '5 fardos de Refrigerante Coca-cola'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Guaraná Antárctica',
            'tipo2' => '18 litros de Suco(Uva, Maracujá e Limão)',
            'tipo3' => '5 fardos de Refrigerante Fanta Laranja'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Guaraná Antárctica',
            'tipo2' => '18 litros de Suco(Laranja, Maracujá e Limão)',
            'tipo3' => '5 fardos de Refrigerante Fanta Uva'
        ]);

        DB::table('bebidas')->insert([
            'tipo1' => '5 fardos de Refrigerante Guaraná Antárctica',
            'tipo2' => '18 litros de Suco(Laranja, Maracujá e Manga)',
            'tipo3' => '5 fardos de Refrigerante Sprite'
        ]);

    }
}
