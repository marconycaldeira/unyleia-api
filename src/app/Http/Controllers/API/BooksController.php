<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('author')->with('genrer')->with('publisher')->get();
        return $books;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::create([
            'name' => $request->name,
            'publication_year' => $request->publication_year,
            'genrer_id' => $request->genrer_id,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id
        ]);

        return $book;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update([
            'name' => $request->name,
            'publication_year' => $request->publication_year,
            'genrer_id' => $request->genrer_id,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id
        ]);

        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return response()->json($book);

    }
}
