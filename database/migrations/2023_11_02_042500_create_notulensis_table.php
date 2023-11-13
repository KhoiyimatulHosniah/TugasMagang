<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulensis', function (Blueprint $table) {
            $table->id();
            $table->string('sidang_rapat');
            $table->date('hari_tanggal');
            $table->time('jam_panggilan');
            $table->time('jam_sidang_rapat');
            $table->string('acara');
            $table->string('ketua');
            $table->string('sekretaris');
            $table->string('pencatat');
            $table->string('peserta_sidang');
            $table->string('kata_pembuka');
            $table->string('pembahasan');
            $table->string('keputusan');
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
        Schema::dropIfExists('notulensis');
    }
};
