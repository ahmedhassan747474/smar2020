<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offerable_id');
            $table->string('offerable_type');
            $table->bigInteger('lawyer_id');
            $table->integer('price')->default(0);
            $table->text('description')->nullable();
            $table->integer('status')->default(0)->comment('0:pending,1:accepted,2:rejected');
            $table->integer('lawyer_rate')->default(0);
            $table->integer('user_rate')->default(0);
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
        Schema::dropIfExists('offers');
    }
}
