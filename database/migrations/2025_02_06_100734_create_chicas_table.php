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
        Schema::create('chicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apodo')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono')->nullable();
            $table->longText('biografia')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('precio')->nullable();
            $table->string('pais')->nullable();
            $table->string('region')->nullable();
            $table->string('provincia')->nullable();
            $table->string('pay_metoth')->nullable();
            $table->string('fotoperfil')->nullable();
            $table->string('fotoportada')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider_type')->nullable();
            $table->string('edad')->nullable();
            $table->enum('verificacion', allowed: ['verificado', 'no_verificado'])->default('no_verificado');
            $table->enum('ranking', ['silver', 'gold', 'platinum', 'vip', 'default'])->default('default');
            $table->string('onlyfans')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('instagram')->nullable();
            $table->string('web')->nullable();
            $table->unsignedBigInteger('establecimiento_id')->nullable(); // ID del Spa o Cafe
            $table->string('establecimiento_type')->nullable(); // "App\Models\Spa" o "App\Models\Cafe"

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chicas');
    }
};
