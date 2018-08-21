<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PacoteViagem;
use App\PedidoPacote;
use App\User;
use Auth;
class PedidoPacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidosPacote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $pacote = PacoteViagem::findOrFail($id);
        $pedido = new PedidoPacote;

        $pedido->nr_viajantes = $request->nrviajantes;
        $pedido->ponto_partida = $request->pontopartida;
        $pedido->ponto_chegada = $pacote->local;
        $pedido->meio_transporte = $request->meiotransport;
        $pedido->data_inicio = date_create($request->start);
        $pedido->data_fim = date_create($request->end);
        $pedido->detalhes = $request->descricao;
        $pedido->estado = 1;
        $pedido->pacote_id = $pacote->id;
        $cliente = User::find(Auth::id())->cliente;
        $pedido->clientes_id = $cliente->id;
        $pedido->save();
        return redirect('pacote');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pedidosPacote.edit');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viaPacote(Request $request, $id){
        $this->validate($request, [
            'nrviajantes' => 'required|numeric|max:99',
            'meiotransport' => 'nullable|alpha_num|max:55',
            'pontopartida' => 'required|alpha_num|max:55',
            'start' => 'required|date',
            'end' => 'required|date',
            'descricao' => 'nullable|string',
           ]);
           $pacote = PacoteViagem::findOrFail($id);
           $pedido = new PedidoPacote;

           $pedido->nr_viajantes = $request->nrviajantes;
           $pedido->ponto_partida = $request->pontopartida;
           $pedido->ponto_chegada = $pacote->local;
           $pedido->meio_transporte = $request->meiotransport;
           $pedido->data_inicio = date_create($request->start);
           $pedido->data_fim = date_create($request->end);
           $pedido->detalhes = $request->descricao;
           $pedido->estado = 1;
           $pedido->pacote_id = $pacote->id;
           $cliente = User::find(Auth::id())->cliente;
           $pedido->clientes_id = $cliente->id;
           $pedido->save();
           return redirect('pacote');
    }
    protected function validation($request){
        return $this->validate($request, [
         'designacao' => 'required|string|max:55',
         'descricao' => 'required|string|max:255',
         'start' =>'required|date',
         'end' =>'required|date',
         'local' =>'required|string|max:115',         
        ]);
    }
}
