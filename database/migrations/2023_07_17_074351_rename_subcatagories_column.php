<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subccatagories', function(Blueprint $table) {
            $table->renameColumn('catagoryid', 'categoriesid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subccatagories', function(Blueprint $table) {
            $table->renameColumn('categoriesid', 'catagoryid');
        });
    }
};
