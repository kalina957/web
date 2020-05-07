<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table){
            $table->increments('id');
            $table->string('itemName');
            $table->unsignedInteger('user_id');
            $table->string('description');
            $table->enum('type', ['painting', 'photograph', 'sculpture']);
            $table->double('price', 8, 2);
            $table->boolean('available')->default(1);
            $table->string('image')->default('no_image.png');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

    }

    /**
     *             $table->foreign('user_id')->references('id')->on('users');
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
