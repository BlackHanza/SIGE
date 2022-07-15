<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Pessoa;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class FuncionariosController extends Controller
{

    protected $request;
    private $funcionario;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('');
        return view('admin.pages.funcionario', [

            'requests' => Funcionario::with(['pessoas','utilizadores'])->get()
        
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.criarfuncionario');

       /* $funcionarios = Funcionario::create([
            'nome' => $data['name']
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'privilegio_idprivilegio' => 2,
            'pessoa_idpessoa' => $funcionarios->idfuncionario,
            'password' => Hash::make($data['password']),
        ]);*/
    }
        


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Funcionario::create([
            'idfuncionario' => $pessoa->id
        ]);
        $utilizador = User::create([
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'pessoa_idpessoa' => $pessoa->id,
            'privilegio_idprivilegio' => 1
        ]);
        return redirect()->route('funcionario.index');
      /*  dd($request->all());
        $funcionarios = new Funcionario();
        $funcionarios->nome = $request->nome;
        $funcionarios->email = $request->email;
        $funcionarios->password = $request->password;
        $funcionarios->save();  */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilizador = User::where('id', $id)->first();
      
       // dd($suportes);        
       // $suportes = Suporte::find($id);

        

        return view('admin.pages.vernotificacao', [

          'utilizador'=> $utilizador
            
        ]);
        
      /*  $servicos = Servico::with('utentes','tipos','nome')->where('idservico',$id)->first();
 //               
        return view('admin.pages.verfuncionario', [
            'request' => $servicos
        ]);*/
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
}
