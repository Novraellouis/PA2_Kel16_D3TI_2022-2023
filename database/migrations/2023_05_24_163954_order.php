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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('id_customer');
            $table->string('order_number');
            $table->string('nama_customer');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('catatan');
            $table->string('payment_method');
            $table->enum('status',['pending', 'terima', 'tolak'])->default('pending');
            $table->string('gambar');
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
        Schema::dropIfExists('order');
    }
};
