<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function signin(){
        return view('books.signin');
    }

    public function signup(){
        return view('books.signup');
    }

    public function home(){
        $books = DB::select('select * from books');
        return view('books.home', ['books' => $books]);
    }

    public function search(){
        $jsons = "";
        return view('books.search', ['jsons' => $jsons]);
    }

    public function searchbook(Request $request){
        $title = $request->title;

        $data = "https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404?applicationId=1085944608489774178&title=".$title;

        $contents = file_get_contents($data);
        $json = mb_convert_encoding($contents, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $jsons = json_decode($json,true);

        return view('books.search', ['jsons' => $jsons], ['data' => $data]);
    }

    public function addbook(Request $request){
        $param = [
            'title' => $request->title,
            'author' => $request->author,
            'image' => $request->image,
            'user_id' => $request->user_id,
        ];

        DB::insert('insert into books (title, image, author, user_id) values (:title, :image, :author, :user_id)', $param);

        return redirect('/home');
    }

    public function profile(){
        return view('books.profile');
    }

    public function readinfo(Request $request){
        $param = [
            'id' => $request->id
        ];
        $data = DB::select('select * from books where id = :id', $param);
        return view('books.readinfo', ['data' => $data[0]]);
    }
}
