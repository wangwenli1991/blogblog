<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}


//下面全部为注释，本文摘自https://www.cnblogs.com/taotaoxixihaha/p/6640690.html
//================================
//　　php artisan make:migration create_comments_table
//=================================
//    public function up()
//{
//    Schema::create('comments',function(Blueprint $table){
//        $table->engine = 'InnoDB';
//        $table->increments('id');
//        $table->integer('article_id');
//        $table->integer('user_id');
//        $table->string('content');
//        $table->timestamps();
//    });
//}
//=================================================
//    public function down()
//{
//    Schema::dropIfExists('comments');
//}
//
//========================================
//php artisan make:seed ReplyTableSeeder
//============================== CommentsTableSeeder.php
//public function run()
//{
//    factory(\App\Models\Comment::class)->times(30)->create(); // 表示创建30条数据。factory方法对应第三步
//}
//
//===================DatabaseSeeder.php
//
//
//class DatabaseSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        $this->call(CommentsTableSeeder::class); // 会调用CommentsTableSeeder的run方法
//        　　}
//}
//=================================ModelFactory.php
//$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
//    $user = DB::table('users')->select('id')->orderBy(DB::raw('RAND()'))->first();
//    if(empty($user))
//    {
//        $user->id = 0;
//    }
//
//    $article = DB::table('articles')->select('id')->orderBy(DB::raw('RAND()'))->first();
//    if(empty($article))
//    {
//        $article->id = 0;
//    }
//
//    return [
//        'user_id'=>$user->id, // user表随机查询
//        'article_id'=>$article->id, // 从article表u随机查询
//        'content' => '内容:'.$faker->text, // faker用法自寻，或转到vendor\fzaninotto\faker\src\Faker\Generator.php，看文件开头的注释
//    ];
//});
//
//============================如何让faker填充中文
//打开app\Providers\AppServiceProvider.php：
//
//复制代码
//    public function boot()
//{
//    \Carbon\Carbon::setLocale('zh'); // 针对时间包，转化后为中文的时间
//
//    //生成中文数据
//    $this->app->singleton(FakerGenerator::class, function() {
//        return FakerFactory::create('zh_CN');
//    });
//}
//
