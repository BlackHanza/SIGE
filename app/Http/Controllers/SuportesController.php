<?php

namespace App\Http\Controllers;

use App\Models\Suporte;
use Illuminate\Http\Request;

class SuportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suportes = Suporte::all();

        return view('admin.pages.notificacao', [
            'suporte' => $suportes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('utente.pages.contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // var_dump($request->all());
       
       $suportes = new Suporte();
       $suportes->nome = $request->nome;
       $suportes->email = $request->email;
       $suportes->mensagem = $request->mensagem;
       $suportes->save();   
       return redirect()->route('utente');

       //$suporte->create($request->except(['_token', '_resposta']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsuporte)
    {

       $suportes = Suporte::where('idsuporte', $idsuporte)->first();
      // dd($suportes);
        
      // $suportes = Suporte::find($id);

        

        return view('admin.pages.vernotificacao', [

          'suporte'=> $suportes
            
        ]);

      //return "suporte {$id}";
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idsuporte)
    {
        $suportes = Suporte::where('id', $idsuporte)->first();
       dd('here');
        if(!$suportes)

           return redirect()->back();

        $suportes->delete();
        
        return redirect()->route('suporte.index');
    }
}
