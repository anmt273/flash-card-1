<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Lesson;
use App\RememberWord;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class FlashcardController extends Controller
{
    //
    public function getFlashcard($id){
        $card = Word::find($id);
        $card1 = Word::find($id+1);
        $card2 = Word::find($id-1);
        $word1 = Word::where('lesson_id',$card->lesson_id)->first();
        return view('user.page.flashcard', compact('card','card2','card1','word1'));
    }
    public function getGame($id){
        $card = Word::find($id);
        $card1 = Word::find($id+1);
        $card2 = Word::find($id-1);
        return view('user.page.game', compact('card','card2','card1'));
    }
    public function postGame(Request $req, $id){
        $card = Word::find($id);
        $lesson = Lesson::find($card->lesson_id);
        $card1 = Word::find($id+1);
        

        if($card->mean == $req->enter){
            if($card1->lesson_id == $card->lesson_id){
                echo "<script>
                alert('Correct!');
                window.location = '".url('game',$id+1)."'
                </script>"; die;
            }
            else{
                echo "<script>
                alert('No Word in this lesson to study!');
                window.location = '".url('lesson',$lesson->course_id)."'
                </script>"; die;
            }
        }else{
            echo "<script>
            alert('Incorrect!');
            window.location = '".url('game',$id)."'
            </script>";die;
        }
        return redirect()->back();
    }
}
