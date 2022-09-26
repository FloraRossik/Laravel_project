<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
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
      $my_authors = BookAuthor::all();
      return view('all_authors', ['authors' => $my_authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $my_authors = BookAuthor::all();
      return view('create_author', ['authors' => $my_authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $my_author = new BookAuthor();
      $my_author->first_name = $request->get('first_name');
      $my_author->last_name = $request->get('last_name');
      $my_author->middle_name = $request->get('middle_name');
      $my_author->country = $request->get('country');
      $my_author->save();

      return redirect('bookauthors');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function show(int $bookAuthor)
    {
      $my_author = BookAuthor::find($bookAuthor);
      if ($my_author == null)
        return abort(404);
      return view('one_author', ['author' => $my_author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function edit(int $bookAuthor)
    {
      $my_author = BookAuthor::find($bookAuthor);
      if ($my_author == null)
        return abort(404);
      return view('author_editor', ['author' => $my_author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $bookAuthor)
    {
      $my_author = BookAuthor::find($bookAuthor);
      $my_author->first_name = $request->get('first_name');
      $my_author->last_name = $request->get('last_name');
      $my_author->middle_name = $request->get('middle_name');
      $my_author->save();
      return redirect('bookauthors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
      $my_author = BookAuthor::find($id);
      if ($my_author != null)
        $my_author->delete();
      return back();
    }
}
