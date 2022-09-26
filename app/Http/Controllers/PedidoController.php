<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //Acrecentei
use App\Models\Pedido; //Acrecentei

class PedidoController extends Controller
{

    public function index()
    {
        return Pedido::all();
    }

    public function store(Request $request)
    {
        $request -> validate([
            'cliente_id'=>'required',
            
    
        ]);
        return Pedido::create($request->all());
    }


    public function show($id)
    {
        return Pedido::findOrfail($id);
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
    }
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrfail($id);
        $request->validate([
            'descricao'=>'required',
        ]);
        $pedido->descricao = $request->descricao;
        $pedido->save();
        
        return $item;
    }


}
abstract class Status
{
  const PEDIDO_REALIZADO = 'Pedido realizado';
  const PEDIDO_CONFIRMADO = 'Pedido confirmado';
  const PEDIDO_EM_CONFECCAO = 'Pedido em confeccao';
  const PEDIDO_FINALIZADO = 'Pedido finalizado';
}
