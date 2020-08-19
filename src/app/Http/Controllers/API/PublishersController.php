<?php

namespace App\Http\Controllers\API;

use App\Models\Publisher;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePublishers;
use App\Http\Requests\UpdatePublishers;

class PublishersController extends Controller
{
    public function index()
    {
        $publishers = Publisher::get();
        return $publishers;
    }

    public function store(StorePublishers $request)
    {
        try{
            $publisher = Publisher::create([
                'name' => $request->name
            ]);

            return $publisher;
        }catch(\Exception $e){
            return response()->json('Erro ao salvar editora. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }

    public function update(UpdatePublishers $request, $id)
    {
        try{
            $publisher = Publisher::find($id);
            $publisher->update([
                'name' => $request->name
            ]);

            return response()->json($publisher);
        }catch(\Exception $e){
            return response()->json('Erro ao salvar editora. Por favor, verifique os campos informados e tente novamente', 400);
        }
    }


    public function destroy($id)
    {

        try{
            $publisher = Publisher::find($id);
            $publisher->delete();

            return response()->json($publisher);
        }catch(\Exception $e){
            return response()->json('Houve um erro ao tentar excluir, por gentileza, tente novamente', 400);
        }

    }
}
