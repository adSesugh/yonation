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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->nullable();
            $table->string('fullname', 150)->index();
            $table->string('email', 70)->unique();
            $table->string('phone', 20)->index()->unique();
            $table->string('mobile_no', 20)->unique();
            $table->string('gender', 10);
            $table->date('birthdate')->nullable();
            $table->foreignId('domain');
            $table->string('school_name')->index();
            $table->string('course')->nullable();
            $table->foreignId('degree_id')->nullable();
            $table->string('slug', 191);
            $table->boolean('treated')->default(false);
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
        Schema::dropIfExists('resumes');
    }
};
