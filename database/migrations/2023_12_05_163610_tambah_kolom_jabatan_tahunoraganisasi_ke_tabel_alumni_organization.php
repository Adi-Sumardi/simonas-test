<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomJabatanTahunoraganisasiKeTabelAlumniOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumni_organization', function (Blueprint $table) {
            $table->string('organisasi_jabatan');
            $table->string('tahun_organisasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumni_organization', function (Blueprint $table) {
            //
        });
    }
}
