@extends('layout.master')

@section('title', 'MoveArt - Perfil')

@section('links')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection

@section('hero')

<div class="titulo_perfil">
    <h1>Meu Perfil</h1>
</div>

@endsection

@section('main')

<div class="container todas_informacoes_perfil">
<div class="foto_perfil_perfil">
    <img src="{{asset('img/contactos/foncionarios/imagem1.jpg')}}" alt="">
    </div>

    <div class="texto_perfil">
      <h2>Nome</h2>
        <div class="row">
            <div class="primeiro_nome_perfil col-6">
                <p>{{ Auth::user()->primeiro }}</p>
            </div>
    
    
            <div class="apelido_nome_perfil col-6">
                <p>{{ Auth::user()->apelido }}</p>
            </div>
        </div>
        <hr>
        <h3>Email</h3>
        <div class="email_da_pessoa_perfil">
            <p>{{ Auth::user()->email }}</p>
        </div>
        <hr>
        <h4>numero</h4>
        <div class="contacto_da_pessoa_perfil">
            <p>{{ Auth::user()->telefone }}</p>
        </div>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Edita aqui
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  </div> 
    
    

</div>

<div class="modalidades_da_pessoa_perfil">

</div>
@endsection


@section('script')
<script src="{{ asset('js/perfil/perfil.js') }}"></script>
@endsection