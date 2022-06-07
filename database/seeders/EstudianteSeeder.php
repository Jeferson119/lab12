<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 4; $i++){
            Estudiante::create(
                [
                    'nombre' => "nombre$i",
                    'apellido' => "apellido$i",
                    'grado' => "grado$i",
                    'seccion' => "seccion$i",
                    'curso' => "curso$i",
                ]
            );
        }
    }
}
