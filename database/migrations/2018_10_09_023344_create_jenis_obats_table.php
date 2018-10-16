<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_obats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('keterangan');
            $table->timestamps();
        });
        DB::table('jenis_obats')->insert([
            'jenis' => "Jenis 1",
            'keterangan' => "Keterangan 1"
        ],
        [
            'jenis' => "Jenis 2",
            'keterangan' => "Keterangan 2"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_obats');
    }
}
