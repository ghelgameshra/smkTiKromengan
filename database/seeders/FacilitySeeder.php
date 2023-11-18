<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'facility_name' => 'LAB KOMPUTER',
            'facility_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et?'
        ]);

        Facility::create([
            'facility_name' => 'LAB TEKNIK',
            'facility_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et?'
        ]);

        Facility::create([
            'facility_name' => 'MUSHOLLA',
            'facility_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et?'
        ]);

        Facility::create([
            'facility_name' => 'E-RAPORT',
            'facility_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et?'
        ]);

        Facility::create([
            'facility_name' => 'WI-FI',
            'facility_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et?'
        ]);
    }
}
