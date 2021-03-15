<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function signin(){
        return view('books.signin');
    }

    public function signup(){
        return view('books.signup');
    }

    public function home(){
        return view('books.home');
    }

    public function search(){
        return view('books.search');
    }

    public function profile(){
        return view('books.profile');
    }

    public function readinfo(){
        return view('books.readinfo');
    }
}
