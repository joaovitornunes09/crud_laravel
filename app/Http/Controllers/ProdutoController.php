<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Exception;
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
        try {
            $produtos = Produto::all();
            return response()->json([
              "status" => true,
              "mensagem" => "Sucesso",
              "data" => $produtos
  
            ]);
          } catch (Exception $e) {
              return response()->json([
              "status" => false,
              "mensagem" => "Error",
              "data" => $e
              ],500);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
        try {
            $new_produto = new Produto;
        $new_produto->fill([
            'nome' => $req-> nome,
            "preco" => $req-> preco

        ])->save();
            return response()->json([
              "status" => true,
              "mensagem" => "Sucesso",
              "data" => $new_produto
  
            ]);
          } catch (Exception $e) {
              return response()->json([
              "status" => false,
              "mensagem" => "Error",
              "data" => $e
              ],500);
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        try {
            $produto = Produto::find($id);
            return response()->json([
              "status" => true,
              "mensagem" => "Sucesso",
              "data" => $produto
  
            ]);
          } catch (Exception $e) {
              return response()->json([
              "status" => false,
              "mensagem" => "Error",
              "data" => $e
              ],500);
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        try {
            $produto = Produto::find($id)->update(array_filter([
            "nome" => $request-> nome,
            "preco" => $request-> preco                                    
            ]));
            return response()->json([
              "status" => true,
              "mensagem" => "Sucesso",
              "data" => $produto
  
            ]);
          } catch (Exception $e) {
              return response()->json([
              "status" => false,
              "mensagem" => "Error",
              "data" => $e
              ],500);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id)->delete();
        try {
            return response()->json([
              "status" => true,
              "mensagem" => "Sucesso",
              "data" => $produto
  
            ]);
          } catch (Exception $e) {
              return response()->json([
              "status" => false,
              "mensagem" => "Error",
              "data" => $e
              ],500);
          }
    }
}
