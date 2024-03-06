<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::get();
        return view("products.index", ["produtos" => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Produto Criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$produto = Produto::find($id)) {
            return redirect()->route('products.index');
        }
        return view('products.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$produto = Produto::find($id)) {
            return redirect()->route('products.index');
        }
        return view('products.edit', compact('produto'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$produto = Produto::find($id)) {
            return redirect()->back();
        }
        $produto->update($request->all());
        return redirect()
            ->route('products.index')
            ->with('success', 'Produto Atualizados com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$produto = Produto::find($id))
            return redirect()->route('products.index');
        $produto->delete();
        return redirect()
            ->route('products.index')
            ->with('success', 'Produto Deletado com Sucesso');
    }
}
