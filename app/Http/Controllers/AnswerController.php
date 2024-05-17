<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'descripcion' => 'required',
        ]);


        $answer = new Answer();

        $answer->descripcion = $request->descripcion;
        $answer->correct = 0;
        $answer->question_id = $request->question_id;
        $answer->user_id = auth()->user()->id;

        $answer->save();

        return redirect()->back();

    }

    public function update(Answer $answer){

        $answer->correct = 1;
        $answer->save();


        return redirect()->back();


    }
}
