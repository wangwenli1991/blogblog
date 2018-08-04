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
//         $this->call(UsersTableSeeder::class);
        DB::table('user')->insert([
//            'user_name' => str_random(10),
            'user_name' => 'admin888',
            'email' => str_random(10).'@gmail.com',
            'user_pass' => 'eyJpdiI6Imh1aUN2NnlSbWRqdUpiQWNTYVArWGc9PSIsInZhbHVlIjoibTY3S21oT096YThySXIyVW94T1lHUT09IiwibWFjIjoiY2RhMTU1OTU0NjlmZjdhMjI1ZjFiNDliNDcwZjg4ODdkZjA1ZjJhZjI3ZWFlMDg5NGFmYmU0NGFiZDU0ZTJjOCJ9
',
        ]);
    }
}
