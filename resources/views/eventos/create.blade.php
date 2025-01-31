@extends('layout.masterBO')

@section('title', 'MoveArt - EventosBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>Eventos</h1>
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
            <div class="dashboard_funcionarios">

        <h3>Adicionar Evento</h3><br>
    <form action="{{ url('evento') }}" method="post">
        {!! csrf_field() !!}
        <label for=""><img src="{{ asset('img/eventosBO/spotlight.png') }}" style="width:30px; height:; " alt=""></label><br>
        <input type="text" name="nome" placeholder="Nome" ><br>
        <label for=""><img src="{{ asset('img/eventosBO/calendar.png') }}" style="width:30px; height:; " alt=""></label><br>
        <input type="date" name="data" placeholder="Data" ><br>
        <label for=""><img src="{{ asset('img/eventosBO/location.png') }}" style="width:30px; height:; " alt=""></label><br>
        <input type="text" name="localizacao" placeholder="Localização" ><br>
        <label for="inputImage"><img src="{{ asset('img/eventosBO/image.png') }}" style="width:30px; height:; " alt=""></label></br>
        <small id="fileHelp" style="color:red; padding-top:7px;" class="form-text text-muted">A imagem não deve passar as 2MB </small><br>
        <input type="file" class="form-control-file" name="foto" id="inputImage" aria-describedby="fileHelp">
        <label for=""><img src="{{ asset('img/eventosBO/info.png') }}" style="width:30px; height:; " alt=""></label><br>
        <input type="text" name="descricao" placeholder="Descrição" ><br>
        <input type="submit" value="Adicionar"  class="btn btn-success"></br>
    </form>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>
</div>
@stop