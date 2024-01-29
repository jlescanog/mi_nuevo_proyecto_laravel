<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Esto inserta datos de ejemplo a la BD
        DB::table('customers')->insert([
            'store_id' => 'Store001',
            'first_name' => 'Juanito',
            'last_name' => 'Doglas',
            'email' => 'juanito.doglas@example.com',
            'address_id' => 1,
            'dni' => '123456789',
            'create_date' => now(),
            'last_update' => now(),
            'birthdate' => '1990-01-01',
        ]);

        DB::table('customers')->insert([
            'store_id' => 'Store002',
            'first_name' => 'Juana',
            'last_name' => 'Dias',
            'email' => 'juana.dias@example.com',
            'address_id' => 2,
            'dni' => '987654321',
            'create_date' => now(),
            'last_update' => now(),
            'birthdate' => '1985-05-15',
        ]);

        DB::table('customers')->insert([
            'store_id' => 'Store001',
            'first_name' => 'zuley',
            'last_name' => 'montes',
            'email' => 'zuley.montes@example.com',
            'address_id' => 2,
            'dni' => '987654321',
            'create_date' => now(),
            'last_update' => now(),
            'birthdate' => '1985-05-15',
        ]);

        DB::table('customers')->insert([
            'store_id' => 'Store002',
            'first_name' => 'martin',
            'last_name' => 'salazar',
            'email' => 'martin.salazar@example.com',
            'address_id' => 2,
            'dni' => '987654321',
            'create_date' => now(),
            'last_update' => now(),
            'birthdate' => '1985-05-15',
        ]);

        // Agrega más datos como estos aqui
    }
}
