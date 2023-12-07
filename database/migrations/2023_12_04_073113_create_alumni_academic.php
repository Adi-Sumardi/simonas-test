<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniAcademic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_academic', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_alumni')->constrained('alumnis');
            $table->string('gelar');
            $table->string('nama_kampus');
            $table->string('fakultas_jurusan');
            $table->string('tahun_ajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni_academic');
    }
}
