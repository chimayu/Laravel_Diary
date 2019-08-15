<?php

namespace App\Http\Controllers;

use App\Diary; // App/Diaryクラスを使用する宣言
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        $diaries = Diary::all(); 
        // $diaries = []; 

        // dd($diaries);  //var_dump()とdie()を合わせたメソッド。変数の確認 + 処理のストップ

        // view/diaries/index.blade.phpを表示
        // return view('diaries.index');
        return view('diaries.index',['diaries' => $diaries]);
    }
}
