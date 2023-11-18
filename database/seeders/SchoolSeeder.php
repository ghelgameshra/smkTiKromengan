<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'headmaster' => 1,
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius pariatur, sapiente aperiam, adipisci doloribus perferendis iure vel, cupiditate doloremque eum explicabo et? Maiores ipsum doloremque perspiciatis quos voluptas sit. Sapiente, consequuntur corporis doloremque delectus optio ad sunt praesentium fugit tempore modi cupiditate neque dolorum cumque placeat consectetur nulla! Esse, architecto beatae soluta harum quidem ab deleniti veritatis a est dolor error quod maxime cumque corrupti in praesentium corporis blanditiis vitae sapiente, reiciendis accusantium at, laborum distinctio eos. Nesciunt quidem assumenda quas mollitia deleniti aperiam maiores accusamus dolor molestiae temporibus sapiente architecto delectus quia unde laborum, cupiditate autem natus molestias ut eum ipsum voluptate. Pariatur, recusandae veritatis natus deleniti eligendi ipsam harum tempore sunt officiis cupiditate. Veritatis, ex sed voluptate, suscipit alias error saepe iste, odit distinctio repudiandae nihil culpa. Ipsum corrupti recusandae eius, eos quos sed adipisci corporis ad vero et dolores illo optio nam, facilis ducimus deserunt natus.'
        ]);
    }
}
