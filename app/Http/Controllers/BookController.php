<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return inertia('Books/Index', [
            'books' => Book::all()
        ]);
    }

    public function create(){
        return inertia('Books/Create');
    }


    public function store(Request $request){
        $request -> validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'nullable',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }


}
