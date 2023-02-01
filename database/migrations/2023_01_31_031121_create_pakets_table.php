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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('thumbnail');
            $table->string('image_header');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->string('start_form');
            $table->longText('program');
            $table->longText('include_exclude');
            $table->longText('term_conditions');
            $table->longText('harga');
            $table->boolean('special_offer')->default(false);
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
        Schema::dropIfExists('pakets');
    }
};
