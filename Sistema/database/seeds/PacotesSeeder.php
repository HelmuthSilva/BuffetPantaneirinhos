<?php

use Illuminate\Database\Seeder;

class PacotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacotes')->insert([
            'nome' => 'Pacote Arara azul',
            'imagem' => '../img/arara-azul.jpg',
            'salgados' => '1',
            'bebidas' => '1',
            'duracao' => '4.5 horas',
            'valor' => '1200.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Capivara',
            'imagem' => '../img/capivara.png',
            'salgados' => '2',
            'bebidas' => '2',
            'duracao' => '5 horas',
            'valor' => '1300.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Arara vermelha',
            'imagem' => '../img/arara-vermelha.jpg',
            'salgados' => '3',
            'bebidas' => '3',
            'duracao' => '4.5 horas',
            'valor' => '1250.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Garça',
            'imagem' => '../img/garca.jpg',
            'salgados' => '4',
            'bebidas' => '4',
            'duracao' => '5 horas',
            'valor' => '1350.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Jacaré',
            'imagem' => '../img/jacaré.png',
            'salgados' => '5',
            'bebidas' => '5',
            'duracao' => '5.5 horas',
            'valor' => '1400.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Onça pintada',
            'imagem' => '../img/onca-pintada.jpg',
            'salgados' => '6',
            'bebidas' => '6',
            'duracao' => '5 horas',
            'valor' => '1400.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Tucano',
            'imagem' => '../img/tucano.jpg',
            'salgados' => '7',
            'bebidas' => '7',
            'duracao' => '5 horas',
            'valor' => '1500.00'
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Pacote Tuiuiu',
            'imagem' => '../img/tuiuiu.png',
            'salgados' => '8',
            'bebidas' => '8',
            'duracao' => '5 horas',
            'valor' => '1450.00'
        ]);
    }
}
