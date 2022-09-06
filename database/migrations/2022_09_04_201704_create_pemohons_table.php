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
        Schema::create('pemohons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('tenant_id');
            $table->string('name');
            $table->string('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
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
        Schema::dropIfExists('pemohons');
    }
};
