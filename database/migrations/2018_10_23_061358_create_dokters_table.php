<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dokter');
            $table->string('email');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('spesialis', ['Kardiovaskular', 'THT', 'Kesehatan Gigi dan Mulut', 'Ginekologi', 'Tulang', 'Anak', 'Psikiater', 'Saraf', 'Kulit & Kelamin']);
            $table->string('no_hp');
            $table->string('no_identitas');
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
        Schema::dropIfExists('dokters');
    }
}
