<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.pages.utentes', ['requests' => User::with('pessoas')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo = User::create($request->except('_token'));
        $pessoa = Pessoa::create([
           'idutente' => $pessoa->idpessoa
        ]);
      
        return back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $modelo = User::where('User', $user)->first();
      
        // dd($suportes);        
        // $suportes = Suporte::find($id);
 
         
 
         return view('admin.pages.vernotificacao', [
 
           'modelo'=> $modelo
             
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('utente.pages.editarconta');
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $users = $this->repository->where('iduser')->first();
        if(!$users)
        return redirect()->back();
        $user->delete();
        return redirect()->route('user.index');
    }
}
