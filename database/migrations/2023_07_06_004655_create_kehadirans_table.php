<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreign('karyawan_id')->constrained();
            $table->unique(['date', 'karyawan_id']);
            $table->smallInteger('status')->comment('1=masuk & pulang tepat waktu; 2=masuk ga pulang; 3=ga masuk; 4 sakir; 5 izin');
            $table->dateTime('masuk')->nullable();
            $table->dateTime('pulang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadirans');
    }
};
