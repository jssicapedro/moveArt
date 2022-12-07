@extends('layout.master')

@section('title', 'MoveArt - Dança Espanhola')

@section('links')
<link rel="stylesheet" href="{{asset("css/danca.css")}}">
@endsection

@section('hero')
<section id="hero" class="inner-page d-flex align-items-center">
    <div class="img_banner espanhola">
        <h1>Dança Espanhola</h1>
    </div>
</section>
@endsection

@section('main')
<div class="about">
    <div class="txt">
        <p>A dança espanhola é conhecida pelos movimentos elegantes. A dança espanhola mais conhecida é o Flamingo, e é esta à qual a MoveArt dá mais atenção.</p>
        <br>
        <p>A nossa Instituição foi premiada em 2018 como a melhor escola de Leiria de Flamingo. Aprende esta modalidade com os nosso profissionais de topo.</p>
    </div>
    <img src="{{ asset('img/dancas/espanhola/espanhola_app.png') }}" alt="Criança a treinar espanhola de tutu dentro de uma forma irregular sem background e com borda de cor de rosa">
</div>
<div class="advisors">
    <h2>Orientadores</h2>
    <div class="advisors_prof">
    @if (count($profs))
        @foreach($profs as $user)
        <div>
            <img class="grafic1" style="position: absolute;" src="{{ asset('img/dancas/espanhola/espanhola_prof_.png') }}" alt="">
            <img class="prof" src="{{ asset('img/dancas/espanhola/orientadores(3).png') }}" alt="">
            <h3>{{$user->primeiro}}</h3>
        </div>
        @endforeach
        @else
        <h6>Não existem categorias registadas</h6>
        @endif
        <!-- <div>
            <img class="grafic1" style="position: absolute;" src="{{ asset('img/dancas/espanhola/espanhola_prof_.png') }}" alt="">
            <img class="prof" src="{{ asset('img/dancas/espanhola/orientadores(3).png') }}" alt="">
            <h3>Catrina</h3>
        </div>
        <div>
            <img class="grafic2" style="position: absolute;" src="{{ asset('img/dancas/espanhola/espanhola_prof_.png') }}" alt="">
            <img class="prof" src="{{ asset('img/dancas/espanhola/orientadores(2).png') }}" alt="">
            <h3>Íris</h3>
        </div>
        <div>
            <img class="grafic3" style="position: absolute;" src="{{ asset('img/dancas/espanhola/espanhola_prof_.png') }}" alt="">
            <img class="prof" src="{{ asset('img/dancas/espanhola/orientadores(1).png') }}" alt="">
            <h3>Afonso</h3>
        </div> -->
    </div>
</div>
<div class="calendar">
    <h2>Horário</h2>
    <div id="carousel" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="100%" src="{{ asset('img/dancas/calendar.png') }}" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img width="100%" src="{{ asset('img/dancas/espanhola/calendar_espanhola.png') }}" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="calendar_mobile">
    <h2>Horário</h2>
    <div class="image">
        <img src="{{asset('img/dancas/espanhola/calendar_espanhola.png') }}" data-toggle="modal" data-target="#exampleModal" />
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                    <!--Modal body with image-->
                    <div class="modal-body">
                        <img width="100%" src="{{ asset('img/dancas/espanhola/calendar_espanhola.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection