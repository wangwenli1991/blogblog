<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->increments('id');
            $table->text('art_title')->comment('文章标题');
            $table->text('art_editor')->comment('文章作者');
            $table->text('art_thumb')->comment('缩略图');
            $table->text('art_tag')->comment('关键词');
            $table->text('art_description')->comment('描述');
            $table->text('art_content')->comment('内容');
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
        Schema::dropIfExists('art');
    }
}
