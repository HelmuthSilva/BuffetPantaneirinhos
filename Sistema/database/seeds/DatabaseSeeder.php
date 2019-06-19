<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SalgadosSeeder::class);
        $this->call(BebidasSeeder::class);
        $this->call(PacotesSeeder::class);
        $this->call(PermissionsSeeder::class);
    }
}
