<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrandsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /*
        OBS: Repare que aqui eu usei o comando Schema::table pra FAZER UMA ALTERAÇÃO dentro de uma tabela
        */
        Schema::table('products', function (Blueprint $table) {
            //aqui eu sinalizo que eu crio o campo de ID q recebe número positivo (através do unsigned)
            $table->unsignedBigInteger('brand_id');
            //aqui eu indico que é uma chave estrangeira, indicando o campo ID na tabela Brands
            //constraint
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropForeign(['brand_id']);
            $table->dropColumn(['brand_id']);
        });
    }
}
