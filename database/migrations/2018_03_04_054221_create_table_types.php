<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function(BluePrint $table){
            $table->integer('id')->unsigned();
            $table->string('value')->unique()->nullable($value = false);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('threads');
        Schema::dropifExists('pages');
        Schema::dropIfExists('types');
    }
}
