<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->char('nokk', 16);
            $table->string('nama', 40);
            $table->char('nik', 16)->unique();
            $table->string('jkel', 9);
            $table->string('tmptlhr', 20);
            $table->date('tgllhr');
            $table->string('agama', 8);
            $table->string('pendidikan', 26);
            $table->string('pekerjaan', 20);
            $table->string('status', 11);
            $table->string('hubkel', 15);
            $table->char('kwrgngran', 3);
            $table->string('ket', 15);
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
        Schema::dropIfExists('citizens');
    }
}
