<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->longtext('text')->nullable();
            $table->integer('views')->default(0);            
            $table->integer('points')->default(0);
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('page_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');            
            $table->foreign('page_id')->references('id')->on('pages');                        
            $table->timestamps();   
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
