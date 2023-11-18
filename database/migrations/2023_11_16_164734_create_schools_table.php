<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('name')->default('SMK Taman Ilmu Kromengan');
            $table->text('about');
            $table->string('address1')->default('Jl. Nailun Selatan');
            $table->string('address2')->default('Kromengan');
            $table->string('address3')->default('Kromengan');
            $table->string('regency')->default('Kab. Malang');
            $table->string('province')->default('Jawa Timur');
            $table->integer('poscode')->default(123456);
            $table->string('npsn')->default('1234567890');
            $table->foreignId('headmaster');
            $table->string('email')->default('smktamanilmukromegan@gmail.com');
            $table->string('phone')->default('081233334444');
            $table->string('whatsapp')->default('081233334444');
            $table->string('facebook')->default('SMK Taman Ilmu');
            $table->string('instagram')->default('@SMK_Taman_Ilmu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
