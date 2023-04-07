<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->integer('price');
            $table->text('description');
            $table->text('cover');
            $table->integer('status')->default(1);
            $table->integer('exclusive')->default(0);
            $table->unsignedBigInteger('service_id');

            $table->foreign('service_id')->references('id')->on('services');

            $table->timestamps();
        });

        DB::table('projects')->insert(
            array(
                'title' => 'Demo Prod',
                'price' => 30,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'cover' => 1,
                'status' => 1,
                'exclusive' => 1,
                'service_id' => 1,
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
        Schema::dropIfExists('projects');
    }
}
