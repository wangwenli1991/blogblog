<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('cate_id')->comment('id');
            $table->string('cate_name')->comment('分类名称');
            $table->text('cate_title')->comment('分类标题');
            $table->text('cate_keywords')->comment('关键词');
            $table->text('cate_description')->comment('描述');
            $table->text('cate_view')->comment('查看次数');
            $table->text('cate_order')->defautl(0)->comment('排序');
            $table->text('cate_pid')->comment('上级分类id');
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
        Schema::dropIfExists('category');
    }
}
