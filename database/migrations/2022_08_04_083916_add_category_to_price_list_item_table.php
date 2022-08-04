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
        Schema::table('price_list_items', function (Blueprint $table) {
            $table->unsignedBigInteger('price_list_category_id')
                ->after('id');

            $table->foreign('price_list_category_id')
                ->references('id')
                ->on('price_list_categories')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('price_list_items', function (Blueprint $table) {
            $table->dropForeign('category_id');

            $table->dropColumn('category_id');
        });
    }
};
