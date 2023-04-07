<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('sub_title');
            $table->text('content');
            $table->text('cover');
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('portfolios')->insert(
            array(
                'title' => 'Test',
                'sub_title' => 'sub-title',
                'content' => "Test",
                'cover' => "1",
                'status' => "1",
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
        Schema::dropIfExists('portfolios');
    }
}
