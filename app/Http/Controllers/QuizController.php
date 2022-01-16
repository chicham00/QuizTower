<?php
namespace App\Http\Controllers;

use App\Category;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    /**
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $categories = Category::get();
        return view('top', compact('categories'));
    }

    /**
     *
     * @param
     *            $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function question($category_id)
    {
        // var_dump($category_id);

        // DBから押されたカテゴリに該当する問題をランダムに１件取得し変数"quiz"へ代入
        $quiz = Quiz::where('category_id', $category_id)->inRandomOrder()->first();

        // DBから問題をランダムに１件取得し変数"quiz"へ代入
        // $quiz = Quiz::inRandomOrder()->first();

        // 代入した値をview'question'へ送る
        return view('question', compact('quiz'));
    }

    // Request 変数名:前の画面から送られてきた値が入っている
    public function answer(Request $request)
    {
        // ユーザーが入力した値をanswerに代入
        $inputanswer = $request->input('answer');
        $id = $request->input('quizid');

        $quiz = Quiz::find($id);

        // 取得したanswerを配列に変換する
        $answers = explode(",", $quiz->answer);
        // input('answer')と配列に直したanswersを比較するためにforeachを使用

        // 初めにfalseを定義
        $result = false;

        foreach ($answers as $ans) {
            if ($inputanswer == $ans) {
                $result = true;
            }
        }

        return view('answer', compact('result'));
    }
}

