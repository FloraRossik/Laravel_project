<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function index()
  {
    $my_books = Book::all();
    return view('all_books_public', ['books' => $my_books]);
  }
}
