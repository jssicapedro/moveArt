@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/patrocinios_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="patrocinio_main">
        <h1>Patrocínios <span class="quantidade">({{$quantidade}} pendentes)</span></h1>
        <div class="table-wrapper">
            <div class="table-scroll">
                <table id="patrocinio" class="table table-striped align-middle dataTable no-footer display">
                    <thead>
                        <tr class="title">
                            <th style="text-align: center;">id</th>
                            <th style="text-align: center;">Patrocinador</th>
                            <th style="text-align: center;">Valor</th>
                            <th style="text-align: center;">Estado</th>
                            <th class="more">
                                <span class="material-symbols-outlined">
                                    more_vert
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($patrocinios))
                        @foreach($patrocinios as $patrocinio)
                        <tr>
                            <td style="text-align: center;">{{$patrocinio->id}}</td>
                            <td style="text-align: center;">{{$patrocinio->nome}}</td>
                            <td style="text-align: center;">{{$patrocinio->valor}}€</td>
                            <td style="text-align: center;">
                                @if($patrocinio->estado =='sem resposta')
                                <p class="semR">Sem Resposta</p>
                                @elseif($patrocinio->estado =='respondido')
                                <p class="comR">Respondido</p>
                                @else
                                <h6>Não existem categorias registadas</h6>
                                @endif
                            </td>
                            <td class="option">
                                <ul>
                                    <li>
                                        <a href="{{ route('patrocinios.show', $patrocinio->id) }}">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </li>

                                    @if($patrocinio->estado =='respondido')
                                    
                                    @else
                                    <li>
                                        <a href="{{ route('patrocinios.edit', $patrocinio->id) }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </a>
                                    </li>
                                    @endif



                                    <li>
                                        <form action="{{ route('patrocinios.destroy', $patrocinio->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete">
                                                <a href="">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </a>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <h6>Não existem categorias registadas</h6>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#patrocinio').DataTable({

            searching: false,

            "columns": [
                null,
                {
                    "bSortable": false
                },
                null,
                null,
                {
                    "bSortable": false
                },
            ],
            pageLength: 5,
            lengthMenu: [
                [5, 3],
                [5, 3]
            ],
            "order": [
                [0, 'desc']
            ],
            "language": {
                "lengthMenu": "Entradas: _MENU_ por página",
                "zeroRecords": "Nothing found - sorry",
                "info": " _PAGE_ de _PAGES_ ",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Ultimo",
                    "next": "Seguinte",
                    "previous": "Anterior"
                }
            }

        });
    });
</script>
@endsection