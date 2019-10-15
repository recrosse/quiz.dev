<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class QuizController extends Controller
{
    function insertItem(Request $request){
        $results=json_decode($request->post('results'));
        $output=[];
        foreach ($results as $key=>$result){
                $output[]=array(
                    'question'=>isset($result->text) ? $result->text : '',
                    'answer'=>isset($result->a) ? $result->a : '',
                );
        }
        $record=new App\Quiz;
        $record->city=$request->post('city');
        $record->bakery=$request->post('bakery');
        $record->results=json_encode($output);
        $record->save();

    }
    function getList(){
        $results=App\Quiz::get();
        return response()->json($results);
    }
    function getItem($id){
        $result=App\Quiz::find($id);
        if (!$result){
            return 404;
        }
        return response()->json($result);
    }
}
