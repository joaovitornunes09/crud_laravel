<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Cache\Repository;
use PHPUnit\Framework\Exception;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $contato = Contato::all();
            return response()->json([
                "status" => true,
                "mensagem" => "Sucesso na operacao",
                "data" => $contato
            ]);
            } catch (Exception $e) {
                return response()->json([
                "status" => false,
                "mensagem" => "Error na operacao",
                "data" => $e
                ],500);
                    
               
            }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $contato = new Contato;
            $contato->fill([
            "nome" => $request-> nome,
            "email" => $request-> email,
            "motivo_contato" => $request-> motivo_contato,
            "mensagem" => $request-> mensagem
        ])->save();
        return response()->json([
            "status" => true,
            "mensagem" => "Sucesso na operacao",
            "data" => $contato
        ]);
        } catch (Exception $e) {
            return response()->json([
            "status" => false,
            "mensagem" => "Error na operacao",
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
            $contato = Contato::find($id);
            return response()->json([
                "status" => true,
                "mensagem" => "Sucesso na operacao",
                "data" => $contato
            ]);

        } catch (Exception $e) {
            return response()->json([
                "status" => false,
                "mensagem" => "Erro na operacao",
                "data" => $e
            ]);
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
        //
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
        //
        try {
            $contato = Contato::find($id);
            $contato->update(array_filter([
                "nome" => $request->nome,
                "email" => $request->email,
                "motivo_contato" => $request->motivo_contato,
                "mensagem" => $request->mensagem
            ]));
            return response()->json([
                "status" => true,
                "mensagem" => "Sucesso na operacao",
                "data" => $contato
            ]);

        } catch (Exception $e) {
            return response()->json([
                "status" => false,
                "mensagem" => "Erro na operacao",
                "data" => $e
            ]);
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

        
try {
    $deletado = Contato::where("id", $id)->delete();
            return response()->json([
                "status" => true,
                "mensagem" => "Sucesso na operacao",
                "data" => $deletado
            ]);

        } catch (Exception $e) {
            return response()->json([
                "status" => false,
                "mensagem" => "Erro na operacao",
                "data" => $e
            ]);
        }
        
    }
}
