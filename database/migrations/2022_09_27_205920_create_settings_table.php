<?php

use App\Models\Settings;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50);
            $table->string('value', 150)->nullable();
            $table->timestamps();
        });

        $this->seedData();
    }


    public function seedData()
    {
        $keys = [
            'app_name',
            'logo',
            'short_history',
            'vision',
            'mission',
            'fb_url',
            'twt_url',
            'insta_url',
            'linkedin_url',
            'google_url'
        ];

        foreach ($keys as $key => $value) {
            Settings::create([
                'key' => $value
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
