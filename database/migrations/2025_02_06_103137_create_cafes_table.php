<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->unique();
            $table->string('apodo')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('horario')->nullable();
            $table->string('direccion')->nullable();
            $table->string('fotoperfil')->nullable();
            $table->string('fotoportada')->nullable();
            $table->longText('biografia')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider_type')->nullable();
            $table->string('edad')->nullable();
            $table->enum('ranking', ['silver', 'gold', 'platinum', 'vip', 'default'])->default('silver');
            $table->enum('verificacion', ['verificado', 'no_verificado'])->default('no_verificado');
            $table->string('onlyfans')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('pay_metoth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('cafes');
    }
};
