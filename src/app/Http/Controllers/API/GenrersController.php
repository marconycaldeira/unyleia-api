<?php

namespace App\Http\Controllers\API;

use App\Models\Genrer;
use App\Http\Requests\StoreGenrers;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGenrers;

class GenrersController extends Controller
{
    public function index()
    {
        $genrers = Genrer::get();
        return $genrers;
    }

    public function store(StoreGenrers $request)
    {
        try{
            $genrer = Genrer::create([
                'name' => $request->name
            ]);

            return $genrer;
        }catch(\Exception $e){
            return response()->json('Erro ao salvar gênero. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }

    public function update(UpdateGenrers $request, $id)
    {
        try{
            $genrer = Genrer::find($id);
            $genrer->update([
                'name' => $request->name
            ]);

            return response()->json($genrer);
        }catch(\Exception $e){
            return response()->json('Erro ao salvar gênero. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }


    public function destroy($id)
    {

        try{
            $genrer = Genrer::find($id);
            $genrer->delete();

            return response()->json($genrer);
        }catch(\Exception $e){
            return response()->json('Houve um erro ao tentar excluir, por gentileza, tente novamente', 400);
        }

    }
}
