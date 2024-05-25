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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('lettreaccord');
            $table->integer('etat');
            $table->integer('agessa');
            $table->integer('facture');
            $table->integer('montant');
            $table->decimal('montantn');
            $table->date('datepaiement');

            $table->unsignedBigInteger('numpigiste');
            $table->foreign('numpigiste')
                   ->references('id')
                   ->on('pigistes')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');

            $table->unsignedBigInteger('nummagazine');
            $table->foreign('nummagazine')
                ->references('id')
                ->on('magazines')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
