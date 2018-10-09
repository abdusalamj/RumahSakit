<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id')->on('jenis_obats')->onDelete('cascade');
            $table->string('nama');
            $table->string('kategori');
            $table->string('harga');
            $table->string('jumlah');
            $table->enum('stok', ['box', 'pcs', 'buah', 'sachet', 'strip']);
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
        Schema::dropIfExists('obats');
    }
}
