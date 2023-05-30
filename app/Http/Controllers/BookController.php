<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $mostLikeBook = Book::where("like",Book::max("like"))->first();
        $latestBooks = Book::latest()->paginate(4);
        $books = Book::paginate(3);

        return view("home",compact('mostLikeBook','latestBooks','books'));
    }

    public function show($id){
        $book = Book::findOrFail($id);

        return view("detail", compact("book"));
    }
}
