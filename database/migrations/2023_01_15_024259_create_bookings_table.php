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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nama');
            $table->String('alamat');
            $table->String('ktp');
            $table->String('telepon');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->String('jenis_kelamin');
            $table->String('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
