<?php

use Illuminate\Database\Seeder;

class SalgadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('salgados')->insert([
           'tipo1' => '200 coxinhas',
           'tipo2' => '200 enroladinhos de queijo',
           'tipo3' => '200 paes-italiano',
           'tipo4' => '200 enroladinhos de salsicha',
           'tipo5' => '200 bolinhos de queijo'
       ]);

       DB::table('salgados')->insert([
        'tipo1' => '250 coxinhas',
        'tipo2' => '250 enroladinhos de queijo',
        'tipo3' => '250 paes-italiano',
        'tipo4' => '250 enroladinhos de salsicha',
        'tipo5' => '250 bolinhos de queijo'
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '250 coxinhas',
            'tipo2' => '250 pasteis de queijo',
            'tipo3' => '250 paes-italiano',
            'tipo4' => '250 enroladinhos de salsicha',
            'tipo5' => '250 Paes de queijo',
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '200 coxinhas',
            'tipo2' => '200 Quibes',
            'tipo3' => '200 paes-italiano',
            'tipo4' => '200 enroladinhos de salsicha',
            'tipo5' => '200 Paes de queijo',
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '200 coxinhas',
            'tipo2' => '200 empadinhas de queijo',
            'tipo3' => '200 paes-italiano',
            'tipo4' => '200 enroladinhos de salsicha',
            'tipo5' => '200 Paes de queijo',
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '200 coxinhas',
            'tipo2' => '200 pasteis de carne',
            'tipo3' => '200 paes-italiano',
            'tipo4' => '200 enroladinhos de salsicha',
            'tipo5' => '200 pasteis de queijo',
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '200 coxinhas',
            'tipo2' => '200 Quibes',
            'tipo3' => '200 paes-italiano',
            'tipo4' => '200 enroladinhos de salsicha',
            'tipo5' => '200 pasteis de queijo',
        ]);

        DB::table('salgados')->insert([
            'tipo1' => '200 coxinhas',
            'tipo2' => '200 enroladinhos de queijo',
            'tipo3' => '200 paes-italiano',
            'tipo4' => '200 enroladinhos de salsicha',
            'tipo5' => '200 pasteis de carne',
        ]);

    }
}
