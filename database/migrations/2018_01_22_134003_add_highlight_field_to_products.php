<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHighlightFieldToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add highlight field to the product table
        Schema::table('products', function(Blueprint $table) {
            $table->boolean('highlight')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop highlight field
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('highlight');
        });
    }
}
