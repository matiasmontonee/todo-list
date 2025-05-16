<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'title' => 'Comprar víveres',
                'description' => 'Comprar leche, pan y huevos.',
                'due_date' => Carbon::now()->addDays(1),
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hacer ejercicio',
                'description' => 'Correr 30 minutos.',
                'due_date' => Carbon::now()->addDays(2),
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Estudiar Laravel',
                'description' => 'Completar el módulo de migraciones.',
                'due_date' => Carbon::now()->addDays(3),
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Llamar a mamá',
                'description' => 'Preguntar cómo está.',
                'due_date' => Carbon::now()->addDays(4),
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Leer un libro',
                'description' => 'Leer al menos 20 páginas.',
                'due_date' => Carbon::now()->addDays(5),
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
