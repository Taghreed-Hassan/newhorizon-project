<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            
             $table->string('proname');
              $table->string('catnmae');
              $table->string('discrip');
               $table->integer('price');
                $table->string('av');
                 $table->string('pic');
             
            
            
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
        Schema::dropIfExists('insproducts');
    }
}
