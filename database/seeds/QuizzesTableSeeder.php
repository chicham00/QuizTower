<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'question' => '日本で一番高い山は？',
            'answer' => '富士山'
        ]);
        DB::table('quizzes')->insert([
            'question' => '日本で一番高い山は？',
            'answer' => '富士山'
        ]);
        DB::table('quizzes')->insert([
            'question' => '日本で一番高い山は？',
            'answer' => '富士山'
        ]);
    }
}
