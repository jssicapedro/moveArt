@extends('layout.masterBO')

@section('title', 'MoveArt - faqsBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>faqs</h1>
            @auth
            <div class="utilizador_dashboard">
                <span>Olá, {{ Auth::user()->primeiro }}</span>
            </div>@endauth
        </div>

        <!--dashboard_funcionarios/faqs-->
        <div class="baixo">
            
        <h3><a href="{{ url('/evento/create') }}" class="" title="Adicionar Evento"><img src="{{ asset('img/eventosBO/add.png') }}" style="width:30px; height:; " alt=""></a></h3><br>
        
        <div class="dashboard_funcionarios">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="{{ asset('img/eventosBO/list.png') }}" style="width:25px; height:; " alt=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="{{ asset('img/eventosBO/menu.png') }}" style="width:25px; height:; " alt=""></a>
        </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <table>
                    <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Localização</th>
                        <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                    @if (isset($faqs))
                    @foreach($faqs as $item)
                        <tr>
                        <td>
                            <td>{{ $item->pergunta }}</td>
                            <td>{{ $item->resposta }}</td>
                            <td>
                            <a href="{{ url('/evento/' . $item->id) }}" title="View evento"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i><img src="{{ asset('img/eventosBO/eye.png') }}" style="width:25px; height:; " alt=""></button></a>
                                <a href="{{ url('/evento/' . $item->id . '/edit') }}" title="Edit evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><img src="{{ asset('img/eventosBO/edit.png') }}" style="width:25px; height:; " alt=""></button></a>
                                <form method="POST" action="{{ url('/evento' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete evento" onclick="return confirm(&quot;De certeza que quer eliminar esta faq?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i><img src="{{ asset('img/eventosBO/bin.png') }}" style="width:25px; height:; " alt=""></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                <td>Não existem categorias registadas</td>
                    @endif
                    </tbody>
                </table>
        </div>
    </div>          
    </div>
</div>
@endsection

