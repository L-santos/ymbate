<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function(BluePrint $table){
            $table->dropColumn('type');
            $table->integer('type_id')->unsigned()->default(1);
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('comments');
        Schema::dropifExists('threads');
        Schema::dropifExists('page_user');
        Schema::dropifExists('pages');
    }
}
