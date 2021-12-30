<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    
    public function index()
    {
        return view('top',);
    }
    public function question()
    {
        return view('question',);
    }
    public function answer()
    {
        return view('answer',);
    }
    
}

