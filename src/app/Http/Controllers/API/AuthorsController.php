<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthors;
use App\Http\Requests\UpdateAuthors;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::get();
        return $authors;
    }

    public function store(StoreAuthors $request)
    {
        try{
            $author = Author::create([
                'name' => $request->name,
                'year_of_birth' => $request->year_of_birth,
                'gender' => $request->gender,
                'nationality' => $request->nationality
            ]);

            return $author;
        }catch(\Exception $e){
            return response()->json('Erro ao salvar autor. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }

    public function update(UpdateAuthors $request, $id)
    {
        try{
            $author = Author::find($id);
            $author->update([
                'name' => $request->name,
                'year_of_birth' => $request->year_of_birth,
                'gender' => $request->gender,
                'nationality' => $request->nationality
            ]);

            return response()->json($author);
        }catch(\Exception $e){
            return response()->json('Erro ao salvar autor. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }


    public function destroy($id)
    {

        try{
            $author = Author::find($id);
            $author->delete();

            return response()->json($author);
        }catch(\Exception $e){
            return response()->json('Houve um erro ao tentar excluir, por gentileza, tente novamente', 400);
        }

    }
}
