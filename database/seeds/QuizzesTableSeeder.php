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
            'question' => 'パンはパンでも食べられないパンはなーんだ？',
            'answer' => 'フライパン'
        ]);
        DB::table('quizzes')->insert([
            'question' => '本屋さんで買いたいのに買えない本のジャンルってなーんだ？',
            'answer' => '占い'
        ]);
        DB::table('quizzes')->insert([
            'question' => '「何でも増産して増やすぞ‼︎」という動物は？',
            'answer' => 'ぞう'
        ]);
        DB::table('quizzes')->insert([
            'question' => '虫歯を治す薬はいくらする？',
            'answer' => '6480'
        ]);
        DB::table('quizzes')->insert([
            'question' => 'すぐに老朽化してしまう車は？',
            'answer' => 'レッカー車'
        ]);
        DB::table('quizzes')->insert([
            'question' => '切っても切ってもきれないものってなーんだ？',
            'answer' => 'トランプ'
        ]);
        DB::table('quizzes')->insert([
            'question' => '天気が悪いと見えなくて、天気がいいとよく見える。夕方になればグーンと背伸び！夜になったらさようなら。これなーんだ？',
            'answer' => 'かげ'
        ]);
        DB::table('quizzes')->insert([
            'question' => '目を開けていると見えなくて、目を閉じると見えるものってなーんだ？',
            'answer' => 'ゆめ'
        ]);
        DB::table('quizzes')->insert([
            'question' => '鹿さんがお医者さんになったよ。さて、どんなお医者さんになったでしょうか？',
            'answer' => 'しかい'
        ]);
    }
}
