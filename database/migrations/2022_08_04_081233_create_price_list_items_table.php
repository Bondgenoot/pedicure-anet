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
    public function up(): void
    {
        Schema::create('price_list_items', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->text('description')
                  ->nullable();

            $table->string('price');

            $table->integer('index');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('price_list_items');
    }
};
