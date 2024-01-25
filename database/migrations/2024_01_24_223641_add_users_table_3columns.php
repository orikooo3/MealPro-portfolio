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
        Schema::table('users', function (Blueprint $table) {
            //追加
            $table->tinyInteger('age');
            $table->double('height');
            $table->boolean('sex');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //削除
            $table->dropColumn('age');
            $table->dropColumn('height');
            $table->dropColumn('sex');
        });
    }
};
