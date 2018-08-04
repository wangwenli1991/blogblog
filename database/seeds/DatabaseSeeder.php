<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UserTableSeeder::class);



        DB::table('user')->insert([
//            'user_name' => str_random(10),
            'user_name' => 'admin888',
            'email' => str_random(10).'@gmail.com',
            'user_pass' => 'eyJpdiI6Imh1aUN2NnlSbWRqdUpiQWNTYVArWGc9PSIsInZhbHVlIjoibTY3S21oT096YThySXIyVW94T1lHUT09IiwibWFjIjoiY2RhMTU1OTU0NjlmZjdhMjI1ZjFiNDliNDcwZjg4ODdkZjA1ZjJhZjI3ZWFlMDg5NGFmYmU0NGFiZDU0ZTJjOCJ9
',
        ]);

//        填充目录

        DB::table('category')->insert([
//            'user_name' => str_random(10),
            'cate_name' => '手表',
            'cate_title' => '手表',
            'cate_keywords' => '手表',
            'cate_description' => '手表',
            'cate_order' => '0',
            'cate_view' => '0',
            'cate_pid' => '0',

        ]);


        DB::table('category')->insert([
//            'user_name' => str_random(10),
            'cate_name' => '包包',
            'cate_title' => '包包',
            'cate_keywords' => '包包',
            'cate_description' => '包包',
            'cate_order' => '0',
            'cate_view' => '0',
            'cate_pid' => '0',

        ]);

        DB::table('category')->insert([
//            'user_name' => str_random(10),
            'cate_name' => '钻石',
            'cate_title' => '钻石',
            'cate_keywords' => '钻石',
            'cate_description' => '钻石',
            'cate_order' => '0',
            'cate_view' => '0',
            'cate_pid' => '0',

        ]);








    }
}
