<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProdutosRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::all();
        //passa pelo ProdutoResource para formatar a resposta
        return ProdutoResource::collection($produto);
    }

    //Passa pelo StoreUpdateProdutosRequest para validar os dados
    public function store(StoreUpdateProdutosRequest $request)
    {
        //pega somente os dados que foram validados no StoreUpdateProdutosRequest
        $data = $request->validated();
        $produto = Produto::create($data);

        return new ProdutoResource($produto);
    }

    public function update(StoreUpdateProdutosRequest $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $data = $request->validated();
        $produto->update($data);

        return new ProdutoResource($produto);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json([
            'message' => 'Produto removido com sucesso!'
        ]);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);

        return new ProdutoResource($produto);
    }
}