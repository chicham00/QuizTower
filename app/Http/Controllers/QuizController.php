<?php
namespace App\Http\Controllers;

use App\Category;
use App\Quiz;
use App\Lib\QuizLib;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    /**
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        // $test = new QuizLib();
        // $result = $test->tasizan();
        // var_dump($result);
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
        // ユーザーが入力した値をinputanswerに代入
        $inputAnswer = $request->input('answer');
        $id = $request->input('quizid');

        $quiz = Quiz::find($id);

        $quizLib = new QuizLib();
        $result = $quizLib->answerCheck($quiz, $inputAnswer);

        return view('answer', compact('result'));
    }
}

