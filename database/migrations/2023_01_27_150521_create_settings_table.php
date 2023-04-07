<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
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
            $table->text('title');
            $table->text('email');
            $table->text('phone');
            $table->text('map');
            $table->text('logo');
            $table->text('home_ftext');
            $table->text('home_stext');
            $table->text('about_ftext');
            $table->text('about_stext');
            $table->text('about_content');
            $table->text('about_img')->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert(
            array(
                'title' => 'Amir Tamamy',
                'email' => 'admin@gmail.com',
                'phone' => "01033424375",
                'map' => "Madinty",
                'logo' => "Madinty",
                'home_ftext' => "AMIR TMAMY",
                'home_stext' => "Advertising Creative Director",
                'about_ftext' => "AMIR TMAMY",
                'about_stext' => "Advertising Creative Director",
                'about_content' => "Advertising Creative Director",
            )
        );
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
}
