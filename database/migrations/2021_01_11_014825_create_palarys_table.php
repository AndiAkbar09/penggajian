<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palarys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('employees_id');
            $table->string('gaji_pokok');
            $table->string('jam_lembur');
            $table->string('uang_lembur');
            $table->string('tgl_transfer');
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
        Schema::dropIfExists('palarys');
    }
}
