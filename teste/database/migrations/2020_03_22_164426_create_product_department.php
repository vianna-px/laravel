<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_department', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('department_id');
            //constraint foreign key
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade'); //isso é pra quando deletarem o produto, apagar em *Cascata
            $table->foreign('department_id')->references('id')
                ->on('departments')->onDelete('cascade');
            //constraint primary keys
            $table->primary(['product_id','department_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_department');
    }
}

//*Cascata: Quando aquele item é apagado, todos os seus relacionamentos também serão;