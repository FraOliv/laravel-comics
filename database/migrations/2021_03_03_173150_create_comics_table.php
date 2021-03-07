<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price');
            $table->integer('number_page');
            $table->integer('chapter');
            $table->integer('rate');
            $table->string('cover')->nullable();
            $table->text('description');
            $table->boolean('available');
            $table->timestamp('on_sale_date')->nullable();
            $table->string('trim_size')->nullable();
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
        Schema::dropIfExists('comics');
    }
}
