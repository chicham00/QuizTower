<?php
namespace App\Lib;

use App\Quiz;

class QuizLib
{

    /**
     * 正解判定を行う
     *
     * @param Quiz $quiz
     * @param String $inputAnswer
     * @return boolean
     */
    public function answerCheck($quiz, $inputAnswer)
    {
        // 取得したanswerを配列に変換する
        $answers = explode(",", $quiz->answer);
        // input('answer')と配列に直したanswersを比較するためにforeachを使用
        // 初めにfalseを定義
        $result = false;
        foreach ($answers as $ans) {
            if ($inputAnswer == $ans) {
                $result = true;
            }
        }
        return $result;
    }

    public function test()
    {
        $ret = false;
        if (true) {
            $ret = true;
        }

        return $ret;
    }
}