<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('fournisseur_id');
            $table->integer('prixS');
            $table->integer('qteS');
            $table->string('date');
            $table->integer('numero');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('cascade');
      
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
        Schema::dropIfExists('stocks');
    }
}
