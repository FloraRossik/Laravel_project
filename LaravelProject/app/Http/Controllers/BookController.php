<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $my_books = Book::all();
      return view('all_books', ['books' => $my_books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $authors = Book::all();
      return view('create_book', ['authors' => $authors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $my_book = new Book();
      $my_book->title = $request->get('title');
      $my_book->genre = $request->get('genre');
      $my_book->description = $request->get('description');
      $my_book->additionaly = $request->get('additionaly');
      $my_book->author_id = $request->get('author_id');
      $my_book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(int $book)
    {
      $my_book = Book::find($book);
      if ($my_book == null)
        return abort(404);
      return view('one_book', ['book' => $my_book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(int $book)
    {
      $my_book = Book::find($book);
      if ($my_book == null)
        return abort(404);
      return view('book_editor', ['book' => $my_book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $book)
    {
      $my_book = Book::find($book);
      $my_book->title = $request->get('title');
      $my_book->genre = $request->get('genre');
      $my_book->description = $request->get('description');
      $my_book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
      $my_book = Book::find($id);
      if ($my_book != null)
        $my_book->delete();
        return back();
    }
}