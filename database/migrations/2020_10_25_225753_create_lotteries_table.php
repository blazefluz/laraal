<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotteries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('category')->nullable();
            $table->datetime('startdate')->nullable();
            $table->datetime('enddate')->nullable();
            $table->string('price')->nullable();
            $table->integer('max_play')->nullable();
            $table->integer('no_winners')->nullable();
            $table->string('banner_img')->nullable();
            $table->string('icon_img')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('status')->nullable();
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
        Schema::dropIfExists('lottery');
    }
}
