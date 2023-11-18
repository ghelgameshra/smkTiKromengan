<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Extracurricular::create([
            'name' => 'Osis'
        ]);

        Extracurricular::create([
            'name' => 'Pramuka'
        ]);

        Extracurricular::create([
            'name' => 'Seni'
        ]);

        Extracurricular::create([
            'name' => 'PMR'
        ]);
    }
}
