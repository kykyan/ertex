<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 16);
            $table->char('nik', 16);
            $table->foreign('nik')->references('nik')->on('citizens');
            $table->string('alamat', 75);
            $table->string('keterangan');
            $table->string('email', 50);
            $table->char('statussurat', 1)->default('0');
            $table->string('teks')->nullable();
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
        Schema::dropIfExists('services');
    }
}
