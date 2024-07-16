<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listar(){
        
        $clientes = Cliente::orderBy('id', 'desc')->get();
        return view('clientes.listarcliente', compact('clientes'));
}

public function create(){ 
        
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        return view('clientes.createcliente', compact('clientes'));
    }
}

public function store(Request $request){ 
        
    $cliente= new Cliente();//lo verde es el nombre del modelo y creo una variable $cliente
    $cliente->codigo=$request->codigo;//aca va los atributos como coloco en la migracion 
    $cliente->tlno=$request->tlno;
    $cliente->domicilio=$request->domicilio;
    $cliente->run_social=$request->run_social;
    $cliente->save();
    return $cliente;
    
 
}
public function edit(Cliente $cliente){//lo verde es el model y lo otro es la variable cliene en singular
    return view('clientes.editcliente',compact('cliente')); 
}

public function update(Request $request,cliente $cliente){ 
            
    $cliente->codigo=$request->codigo;
    $cliente->tlno=$request->tlno;
    $cliente->domicilio=$request->domicilio;
    $cliente->run_socia=$request->run_socia;
    
    $cliente->save();
 
    return redirect()->route('cliente.listar'); 
 
  }

public function destroy(Cliente $cliente){
        
    $cliente->delete();
    
    return redirect()->route('cliente.listar');
}
}