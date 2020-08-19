<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooks;
use App\Http\Requests\UpdateBooks;
use App\Models\Book;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::with('author')->with('genrer')->with('publisher')->get();
        return $books;
    }

    public function store(StoreBooks $request)
    {
        try{
            $book = Book::create([
                'name' => $request->name,
                'publication_year' => $request->publication_year,
                'genrer_id' => $request->genrer_id,
                'author_id' => $request->author_id,
                'publisher_id' => $request->publisher_id
            ]);

            return $book;
        }catch(\Exception $e){
            return response()->json('Erro ao salvar livro. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }

    public function update(UpdateBooks $request, $id)
    {
        try{
            $book = Book::find($id);
            $book->update([
                'name' => $request->name,
                'publication_year' => $request->publication_year,
                'genrer_id' => $request->genrer_id,
                'author_id' => $request->author_id,
                'publisher_id' => $request->publisher_id
            ]);

            return response()->json($book);
        }catch(\Exception $e){
            return response()->json('Erro ao salvar livro. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }


    public function destroy($id)
    {

        try{
            $book = Book::find($id);
            $book->delete();

            return response()->json($book);
        }catch(\Exception $e){
            return response()->json('Houve um erro ao tentar excluir, por gentileza, tente novamente', 400);
        }

    }
}
