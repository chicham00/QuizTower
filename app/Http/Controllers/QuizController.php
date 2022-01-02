<?php
namespace App\Http\Controllers;

use App\Quiz;

class QuizController extends Controller
{

    public function index()
    {
        return view('top');
    }

    public function question()
    {
        $quiz = Quiz::find(1);
        return view('question',compact('quiz'));
    }

    public function answer()
    {
        return view('answer');
    }
}

