<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Cambia il tipo di dato del campo type_id a unsignedBigInteger
        Schema::table('characters', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->change();
            $table->foreign('type_id')->references('id')->on('types')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // "Rollback" della modifica del tipo di dato
        Schema::table('characters', function (Blueprint $table) {
            $table->dropForeign('characters_type_id_foreign');
        });
    }
};
