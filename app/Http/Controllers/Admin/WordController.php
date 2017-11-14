<?php
/**
 * Created by PhpStorm.
 * User: kaopizadmin
 * Date: 13/11/2017
 * Time: 09:31
 */

namespace App\Http\Controllers\Admin;


use App\Lesson;
use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class WordController extends AdminBaseController
{
    public function ajaxGetWords(Request $request){
        if($request->ajax()){
            //$words = Word::where('lesson_id',$request->get('lesson_id'))->paginate(10);
            $words = Word::where('lesson_id',$request->get('lesson_id'))->get();
            return \response(json_encode($words));
        }
    }

    public function add(Request $request){
        if($request->has('lesson_id')){
            $lesson_id = $request->get('lesson_id');
            if($request->isMethod('GET')){
                return $this->render('admin.words.add',['lesson_id' => $lesson_id]);
            }
            else {
                $word = new Word();
                $word->lesson_id = $request->get('lesson_id');
                $word->word = $request->get('word');
                $word->mean = $request->get('mean');
                $word->phonetic = $request->get('phonetic');
                $word->desc = $request->get('desc');
                $word->example = $request->get('example');
                $word->example_mean = $request->get('example_mean');
                $word->img = 'img';
                /*$word->audio = 'audio';*/

                $word->save();
                $word->lesson->word_quantity = $word->lesson->word_quantity + 1;
                $word->lesson->save();
                $course_id = Lesson::find($lesson_id)->course->id;

                dflash('Thêm từ mới thành công!', 'success');
                return redirect()->route('admin.lesson.list',['lesson_old_id' => $lesson_id, 'course_id' => $course_id]);
            }
        }
        else{
            dflash('Chưa chọn bài học! Click cột danh sách word để xem!!','warning');
            return back();
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $word = Word::find($id);
        if (!$word){
            dflash('Khong tim thay tu!!', 'warning');
            return back();
        }
        else{
            if($request->isMethod('GET')){
                return $this->render('admin.word.edit',['word' => $word]);
            }
            else {
                $word->lesson_id = $request->get('lesson_id');
                $word->word = $request->get('word');
                $word->mean = $request->get('mean');
                $word->phonetic = $request->get('phonetic');
                $word->desc = $request->get('desc');
                $word->example = $request->get('example');
                $word->example_mean = $request->get('example_mean');
                $word->img = 'img';
                /*$word->audio = 'audio';*/

                $word->save();

                dflash('Sửa bài học thành công!', 'success');
                return back()->with('lesson_id_old',$request->get('lesson_id'));
            }
        }

    }
}