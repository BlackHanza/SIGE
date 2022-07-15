<?php

namespace App\Http\Controllers;

use App\Ficheiro;
use App\Models\Municipio;
use App\Models\Pessoa;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Servico;
use App\Models\Tiposervico;
use App\Municipio as AppMunicipio;
//use App\Tiposervico;
use App\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tipo_ServicosController extends Controller
{
    private $repository;


    public function __construct( Servico $servico )
    {
        
        $this->repository = $servico;
        
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUtente()
    {
        //dd(Servico::all());

        $servico = Servico::get(); 
        $tipoServico = Tiposervico::paginate(10);
        return view('utente.pages.registos', ['servico' => $servico, 'tipoServico' => $tipoServico]);
    }
    public function indexAdmin()
    {
        $servico = Servico::with('tipos')->orderBy('idservico', 'asc')->get();
        //dd($servico);
        $tipoServico = Tiposervico::paginate(10);
        return view('admin.pages.registo', ['servico' => $servico, 'tipoServico' => $tipoServico]);     
    }
    /*
    public function indexPrimeira()
    {
        return view('admin.pages.primeira', ['requests' => ServiceRequest::paginate(10)]);
    }
    public function indexSegunda()
    {
        return view('admin.pages.segunda', ['requests' => ServiceRequest::paginate(10)]);
    }
    public function indexRenovar()
    {
        return view('admin.pages.renovar', ['requests' => ServiceRequest::paginate(10)]);
    }
    public function indexAverbar()
    {
        return view('admin.pages.averbar', ['requests' => ServiceRequest::paginate(10)]);
    }
    public function indexCriminal()
    {
        return view('admin.pages.criminal', ['requests' => ServiceRequest::paginate(10)]);
    }*/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createPrimeira()
    {
        return view('utente.pages.bipv');
    }
    public function createSegunda()
    {
        return view('utente.pages.biSegV');
    }
    public function createAverbar()
    {
        return view('utente.pages.averbar');
    }
    public function createRenovar()
    {
        $municipio = Municipio::all();
        return view('utente.pages.biRenov', compact('municipio'));
    }
    public function createRegisto()
    {
        return view('utente.pages.regis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    public function storePrimeira(Request $request)
    {

        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Utente::create([
            'idutente' => $pessoa->id
        ]);
        //$servico = Servico::create([
        $this->repository->create([
            'utente_idutente' => $pessoa->id,
            'tipo_servico_idtipo_servico' => 1
        ]);
        
        $assento_file = null;
        
        if($request->hasFile('assentofile') && $request->file('assentofile')->isValid()){
            $arquivos = $request->file('assentofile');
            $assentofile = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$assentofile);
            $assento_file = $assentofile;
            $pessoa->assentofile = $assentofile;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $maefile = null;
        
        if($request->hasFile('bi_mae') && $request->file('bi_mae')->isValid()){
            $arquivos = $request->file('bi_,ae');
            $bi_mae = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$bi_mae);
            $maefile = $bi_mae;
            $pessoa->bi_mae = $bi_mae;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $paifile = null;
        
        if($request->hasFile('bi_pai') && $request->file('bi_pai')->isValid()){
            $arquivos = $request->file('bi_pai');
            $bi_pai = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$bi_pai);
            $comproFile = $bi_pai;
            $pessoa->bi_pai = $bi_pai;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }
        return back();
        /*
        $user = \Auth::user();
        dd($request->all());
        \Log::debug("message:".json_encode($user));
        $user->pessoa->fill($request->all());
        $user->pessoa->save();
        $service = Service::find(1);
        $servicerequest = ServiceRequest::create(['service_id' => $service->id, 'user_id' => $user->id,
            'price' => $service->price, 'status' => 'naopago'
        ]);
        return back();*/
    }


    public function storeSegunda(Request $request)
    {
        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Utente::create([
            'idutente' => $pessoa->idpessoa
        ]);
        $service = $this->repository->create([
            'utente_idutente' => $pessoa->idpessoa,
            'nome' => $pessoa->idpessoa,
            'tipo_servico_idtipo_servico' => 2
        ]);
        
        $nameFile = null;
        
        if($request->hasFile('fichbilhete') && $request->file('fichbilhete')->isValid()){
            $arquivos = $request->file('fichbilhete');
            $filename = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$filename);
            $nameFile = $filename;
            $pessoa->filename = $filename;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $comproFile = null;
        
        if($request->hasFile('comprovativo') && $request->file('comprovativo')->isValid()){
            $arquivos = $request->file('comprovativo');
            $comprovativo = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$comprovativo);
            $comproFile = $comprovativo;
            $pessoa->comprovativo = $comprovativo;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

       // dd($request);
        return back();

        /*
        $user = \Auth::user();
        \Log::debug("message:" . json_encode($user));
        $user->pessoa->fill($request->all());
        $user->pessoa->save();
        $service = Service::find(2);
        $servicerequest = ServiceRequest::create([
            'service_id' => $service->id, 'user_id' => $user->id,
            'price' => $service->price, 'status' => 'naopago'
        ]);*/
       
        
    }
    public function storeRenovar(Request $request)
    {
       

        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Utente::create([
            'idutente' => $pessoa->idpessoa
        ]);
        $service = $this->repository->create([
            'utente_idutente' => $pessoa->idpessoa,
            'nome' => $pessoa->idpessoa,
            'tipo_servico_idtipo_servico' => 3
        ]);

        $nameFile = null;
        
        if($request->hasFile('fichbilhete') && $request->file('fichbilhete')->isValid()){
            $arquivos = $request->file('fichbilhete');
            $filename = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$filename);
            $nameFile = $filename;
            $pessoa->filename = $filename;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        //dd($request);

        $comproFile = null;
        
        if($request->hasFile('comprovativo') && $request->file('comprovativo')->isValid()){
            $arquivos = $request->file('comprovativo');
            $comprovativo = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$comprovativo);
            $comproFile = $comprovativo;
            $pessoa->comprovativo = $comprovativo;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

            return back();
    }


    public function storeAverbar(Request $request)
    {
        
        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Utente::create([
            'idutente' => $pessoa->idpessoa
        ]);
        
        $service = $this->repository->create([
            'utente_idutente' => $pessoa->idpessoa,
            'nome' => $pessoa->idpessoa,
            'tipo_servico_idtipo_servico' => 4
        ]);

        $nameFile = null;
        
        if($request->hasFile('fichbilhete') && $request->file('fichbilhete')->isValid()){
            $arquivos = $request->file('fichbilhete');
            $filename = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$filename);
            $nameFile = $filename;
            $pessoa->filename = $filename;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $comproFile = null;
        
        if($request->hasFile('comprovativo') && $request->file('comprovativo')->isValid()){
            $arquivos = $request->file('comprovativo');
            $comprovativo = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$comprovativo);
            $comproFile = $comprovativo;
            $pessoa->comprovativo = $comprovativo;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $casadoFile = null;
        
        if($request->hasFile('casadofile') && $request->file('casadofile')->isValid()){
            $arquivos = $request->file('casadofile');
            $casadofile = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$casadofile);
            $casadoFile = $casadofile;
            $pessoa->casadofile = $casadofile;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }


        
        return back();
        
        /* 
        $user = \Auth::user();
        \Log::debug("message:" . json_encode($user));
        $user->pessoa->fill($request->all());
        $user->pessoa->save();
        $service = Service::find(4);
        $servicerequest = ServiceRequest::create([
            'service_id' => $service->id, 'user_id' => $user->id,
            'price' => $service->price, 'status' => 'naopago'
        ]);
        return back();*/
    }
    public function storeRegisto(Request $request)
    {
        $pessoa = Pessoa::create($request->except('_token'));
        $utente = Utente::create([
            'idutente' => $pessoa->idpessoa
        ]);

        $service = $this->repository->create([
            'utente_idutente' => $pessoa->idpessoa,
            'nome' => $pessoa->idpessoa,
            'tipo_servico_idtipo_servico' => 5
        ]);

        $nameFile = null;
        
        if($request->hasFile('fichbilhete') && $request->file('fichbilhete')->isValid()){
            $arquivos = $request->file('fichbilhete');
            $filename = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$filename);
            $nameFile = $filename;
            $pessoa->filename = $filename;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        $comproFile = null;
        
        if($request->hasFile('comprovativo') && $request->file('comprovativo')->isValid()){
            $arquivos = $request->file('comprovativo');
            $comprovativo = time().'.'.$arquivos->getClientOriginalName();
            $upload = $arquivos->storeAs('public/ficheiros',$comprovativo);
            $comproFile = $comprovativo;
            $pessoa->comprovativo = $comprovativo;
            $pessoa->save();
            if(!$upload){
                return redirect()
                ->back()
                ->with('Erro no upload')
                ->withInput();
            }
        }

        
        /*
        Ficheiro::create([
            'idservico' => $service->id,
            'ficheiro' => $nameFile
        ]);*/

        /*
        $user = \Auth::user();
        \Log::debug("message:" . json_encode($user));
        $user->pessoa->fill($request->only(['nome', 'bi_numero', 'pai', 'mae', 'efeito', 'fich']));
        $user->pessoa->save();
        $service = Service::find(5);
        $servicerequest = ServiceRequest::create([
            'service_id' => $service->id, 'user_id' => $user->id,
            'price' => $service->price, 'status' => 'naopago'
        ]);
        */
        //dd($request);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(int $id)
    {
        
        $server = DB::table('servico')
            ->join('utente', 'utente_idutente','idutente')
            ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
            ->join('pessoa','idutente','idpessoa')
            ->where('idservico', $id)
            ->first();
        return view('utente.pages.verregistos', [
            'request' => $server
        ]);
        
      }

    public function showAdmin(int $id)
    {

        $server = DB::table('servico')
            ->join('utente', 'utente_idutente','idutente')
            ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
            ->join('pessoa','idutente','idpessoa')
            ->where('idservico', $id)
            ->first();
        return view('admin.pages.verregisto', [
            'request' => $server
        ]);
    }

    public function showUtente(int $id)
    {

        $server = DB::table('servico')
            ->join('utente', 'utente_idutente','idutente')
            ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
            ->join('pessoa','idutente','idpessoa')
            ->where('idservico', $id)
            ->first();
        return view('utente.pages.verregistos', [
            'request' => $server
        ]);
    }

    public function showPrimeira(int $id)
    {
        $services = DB::table('servico')
            ->join('utente', 'utente_idutente','idutente')
            ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
            ->join('pessoa','idutente','idpessoa')
            ->where('idservico', $id)
            ->first();

        return view('admin.pages.primeira', [
            'services' => $services
        ]);
        
      }
      public function showSegunda(int $id)
      {
          
        $services = DB::table('servico')
              ->join('utente', 'utente_idutente','idutente')
              ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
              ->join('pessoa','idutente','idpessoa')
              ->where('idservico', $id)
              ->first();
          return view('admin.pages.averbar', [
            'services' => $services
          ]);
          
        }
        public function showAverbar(int $id)
        {
            
            $services = DB::table('servico')
                ->join('utente', 'utente_idutente','idutente')
                ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
                ->join('pessoa','idutente','idpessoa')
                ->where('idservico', $id)
                ->first();
            return view('admin.pages.averbar', [
                'services' => $services
            ]);
            
          }
          public function showRenovar(int $id)
          {
              
            $services = DB::table('servico')
                  ->join('utente', 'utente_idutente','idutente')
                  ->join('tipo_servico','tipo_servico_idtipo_servico', 'idtipo_servico')
                  ->join('pessoa','idutente','idpessoa')
                  ->where('idservico', $id)
                  ->first();
              return view('admin.pages.averbar', [
                'services' => $services
              ]);
              
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPrimeira($id)
    {
        if(!$servico = Servico::find($id))
            return redirect()->back();
            
        
        return view('', compact('id'));
    }

    public function editSegunda($id)
    {
        if(!$servico = Servico::find($id))
            return redirect()->back();
            
        
        return view('', compact('id'));
    }

    public function editAverbar($id)
    {
        if(!$servico = Servico::find($id))
            return redirect()->back();
            
        
        return view('', compact('id'));
    }

    public function editRenovar($id)
    {
        if(!$servico = Servico::find($id))
            return redirect()->back();
            
        
        return view('', compact('id'));
    }

    public function editCriminal($idservico)
    {
        if(!$servico = $this->repository->find($idservico))
            return redirect()->back();
            
        
        return view('admin.pages.editCriminal', compact('idservico'));
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
        
        if(!$servico = Servico::find($id))
            return redirect()->back();
        
        $servico->update($request->all());
        
        return redirect()->route('AdminRegisto');
        
    }

    public function updateCriminal(Request $request, $id)
    {
        
        if(!$servico = Servico::find($id))
            return redirect()->back();
        
        $servico->update($request->all());
        
        return redirect()->route('AdminRegisto');
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = $this->repository->where('idservico', $id)->first();
        if(!$servico)
            return redirect()->back();
        $servico->delete();
            return redirect()->route('AdminRegisto');
    }

    /**
     * Search Registos
     */

    public function search(Request $request){

        $filters = $request->except('_token');

        $servico = $this->repository->search($request->filter);

       return view('admin.pages.registo', 
       ['Servico'=>$servico  /*,'tipoServico' =>$tipoServico*/]
    );

        

    }
}
