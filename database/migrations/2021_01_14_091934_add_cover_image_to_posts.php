<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('post_image')->default('default_cover.jpg');
        });
    }


    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('post_image');
        });
    }
}
