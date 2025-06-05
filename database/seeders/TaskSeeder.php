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
    public function run(): void
    {
       DB::table('tasks')->insert([
            [
                'title' => 'Tarea 1: Revisar código',
                'description' => 'Revisar el código del módulo de autenticación.',
                'completed_at' => Carbon::now()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarea 2: Escribir documentación',
                'description' => 'Completar la documentación de la API.',
                'completed_at' => Carbon::now()->addDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarea 3: Reunión con el equipo',
                'description' => 'Planificación del sprint con el equipo de desarrollo.',
                'completed_at' => Carbon::now()->addDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
