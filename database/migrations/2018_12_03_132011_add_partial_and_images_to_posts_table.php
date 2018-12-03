<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartialAndImagesToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('partial')->after('text')->default('')->comment('Краткое описание поста');
            $table->string('image_small')->after('partial')->default('no_small.png')->comment('Маленькая картинка');
            $table->string('image_large')->after('image_small')->default('no_large.png')->comment('Большая картинка');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['partial', 'image_small', 'image_large']);
        });
    }
}
