<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('menus');
            $table->string('name');
            $table->string('livewire_component')->nullable();
            $table->string('url')->default('#');
            $table->string('icon')->nullable();
            $table->tinyInteger('order_index')->default(0);
            $table->enum('published', ['0', '1'])->default('1');
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
        Schema::dropIfExists('menus');
    }
}
