<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deep_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_menu_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->string('name', 50);
            $table->string('slug', 75);
            $table->unsignedTinyInteger('order');
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
        Schema::dropIfExists('deep_menus');
    }
};
