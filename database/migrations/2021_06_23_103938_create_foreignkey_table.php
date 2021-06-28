<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('publisher_id')->references('id')->on('publishers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('authors_id')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignkey');
    }
}
