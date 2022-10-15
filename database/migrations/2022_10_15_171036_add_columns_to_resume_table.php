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
        Schema::table('resumes', function (Blueprint $table) {
            $table->string('address')->after('year_to')->nullable();
            $table->string('father', 150)->index()->after('address')->nullable();
            $table->string('fcity', 40)->after('father')->nullable();
            $table->string('fstate', 40)->after('fcity')->nullable();
            $table->string('mother', 150)->index()->after('fstate')->nullable();
            $table->string('mcity', 40)->after('mother')->nullable();
            $table->string('mstate', 40)->after('mcity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resumes', function (Blueprint $table) {
            //
        });
    }
};
