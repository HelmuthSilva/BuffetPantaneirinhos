<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id' => '1',
            'name' => 'Fornecedor',
            'label' => 'Fornecedor'
        ]);

        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Fornecedor',
            'label' => 'Fornecedor'
        ]);

    }
}
