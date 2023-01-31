@extends('layout.master')

@section('title', 'MoveArt - FaQs')

@section('links')
<link rel="stylesheet" href="css/faqs.css">
@endsection

{{-- inicio --}}
<div class="imagem_principal_contactos">
</div>
{{-- fim inicio --}}

@section('main')
<div class="faqs">
  <h2>FAQs</h2>
  <div class="conteudo">
    <div class="pergunta-resposta">
    @if (isset($faqs))
  @foreach($faqs as $faq)
      <button id="botao-pergunta1" aria-expanded="false">
        <span class="pergunta">{{$faq->pergunta}}</span>
        <span class="icon" aria-hidden="true"></span>
      </button>
      <div class="resposta">
        <p>{{$faq->resposta}}</p>
      </div>
    </div>
    @endforeach
    @else
    <h6>Não existem dados registados</h6>
    @endif
  </div>
@endsection

  @section('script')
  <script src="{{ asset('js/faqs/faqs.js') }}"></script>
  @endsection