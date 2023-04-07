<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('bref')->nullable();
            $table->text('img')->nullable();
            $table->text('contact')->default('');
            $table->integer('status');
            $table->integer('exclusive');
            $table->timestamps();
        });

        DB::table('services')->insert(
            array(
                'title' => 'Demo Service',
                'exclusive' => 1,
                'status' => 1,
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
        Schema::dropIfExists('services');
    }
}
