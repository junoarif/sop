<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJunSopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jun_sop', function (Blueprint $table) {
          $table->increments('id');
          $table->string('no_sop');
          $table->string('judul');
          $table->string('pengertian');
          $table->string('kebijakan');
          $table->string('prosedur');
          $table->integer('revisi');
          $table->enum('aktif', ['yes', 'no']);
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
        Schema::dropIfExists('jun_sop');
    }
}
