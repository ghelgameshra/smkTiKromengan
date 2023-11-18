<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::create([
            'major_name' => 'Multimedia',
            'study' => 'Komputer & Informatika',
            'major_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, necessitatibus. Velit praesentium quos ea dolor, iusto nulla impedit quas? Cumque quibusdam excepturi ipsam minima voluptate eos ullam explicabo, eum soluta!'
        ]);

        Major::create([
            'major_name' => 'Teknik Kendaraan Ringan',
            'study' => 'Mesin & Otomotif',
            'major_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, necessitatibus. Velit praesentium quos ea dolor, iusto nulla impedit quas? Cumque quibusdam excepturi ipsam minima voluptate eos ullam explicabo, eum soluta!'
        ]);
    }
}
