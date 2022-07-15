@extends('layouts.utente')

@section('conteudo')

<div class="container">
<div class="py-5 text-center">
  <h2 class="mt-1">Conta</h2>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>          

              <tr>
                <td></td>
                <td></td>
                <td>
                    <button class=" btn btn-primary" href="#">Editar Dados</a>
                    <form action="" method="POST">
                        <input type="hidden" name="user" value="">
                        <input type="submit" value="Remover">
                    </form>
                </td>
                       
           
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
@endsection