<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');

            $table->increments('art_id')->comment('id');
            $table->string('art_name')->comment('分类名称');
            $table->text('art_title')->comment('分类标题');
            $table->text('art_keywords')->comment('关键词');
            $table->text('art_description')->comment('描述');
            $table->text('art_view')->comment('查看次数');
            $table->text('art_order')->defautl(0)->comment('排序');
            $table->text('art_pid')->comment('上级分类id');
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
        Schema::dropIfExists('article');
    }
}
