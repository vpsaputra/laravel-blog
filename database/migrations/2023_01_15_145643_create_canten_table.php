<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canten', function (Blueprint $table) {
            $table->bigIncrements('id_canten');
            $table->bigInteger('id_wedding')->unsigned()->index();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->set('jenis_kelamin', ['L', 'P']);
            $table->string('ayah');
            $table->string('ibu');
            $table->text('keluarga');
            $table->timestamps();
            $table->foreign('id_wedding')->references('id')->on('weddings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canten');
    }
}
