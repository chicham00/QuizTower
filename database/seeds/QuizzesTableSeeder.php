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
            'category_id' => '1',
            'question' => '日本で一番高い山は？',
            'answer' => '富士山,ふじさん'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => 'パンはパンでも食べられないパンはなーんだ？',
            'answer' => 'フライパン,ふらいぱん'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '本屋さんで買いたいのに買えない本のジャンルってなーんだ？',
            'answer' => '占い,うらない'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '「何でも増産して増やすぞ‼︎」という動物は？',
            'answer' => 'ぞう,象,ゾウ'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '虫歯を治す薬はいくらする？',
            'answer' => '6480'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '2',
            'question' => 'すぐに老朽化してしまう車は？',
            'answer' => 'レッカー車,れっかーしゃ'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '切っても切ってもきれないものってなーんだ？',
            'answer' => 'トランプ,とらんぷ'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '天気が悪いと見えなくて、天気がいいとよく見える。夕方になればグーンと背伸び！夜になったらさようなら。これなーんだ？',
            'answer' => 'かげ,影,カゲ'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '2',
            'question' => '目を開けていると見えなくて、目を閉じると見えるものってなーんだ？',
            'answer' => 'ゆめ,夢'
        ]);
        DB::table('quizzes')->insert([
            'category_id' => '1',
            'question' => '鹿さんがお医者さんになったよ。さて、どんなお医者さんになったでしょうか？',
            'answer' => 'しかい,歯医者,歯科医'
        ]);
    }
}
