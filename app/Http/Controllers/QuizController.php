<?php
namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function index()
    {
        return view('top');
    }

    public function question()
    {
        //DBから問題をランダムに１件取得し変数"quiz"へ代入
        $quiz = Quiz::inRandomOrder()->first();
        
        //代入した値をview'question'へ送る
        return view('question',compact('quiz'));
    }
    
    //Request 変数名):前の画面から送られてきた値が入っている
    public function answer(Request $request)
    {
        $answer = $request->input('answer');
        
        $quiz = Quiz::find(5);
        $quiz->answer;
        
        //初めにfalseを定義
        $result = false;
        if($answer == $quiz->answer){
            $result = true;
        }
        //任意の値を表示させる
        //var_dump($result);
       
        return view('answer',compact('result'));
        
        
    }
}

