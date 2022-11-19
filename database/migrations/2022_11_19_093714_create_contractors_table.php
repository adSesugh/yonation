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
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 191)->index()->unique();
            $table->string('email', 100)->unique();
            $table->string('phone', 15)->unique();
            $table->string('mobile', 15)->unique()->nullable();
            $table->string('address', 191);
            $table->year('year_established');
            $table->tinyInteger('contract_deployed');
            $table->string('registrant', 150)->unique();
            $table->string('registrant_phone', 15)->unique()->nullable();
            $table->string('registrant_email', 70)->unique()->nullable();
            $table->json('speciality')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('contractors');
    }
};
