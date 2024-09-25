@extends('layouts.main')
@section('title', 'WDXeventos')
    
@section('content')
    <div class="search-container">
        <h1 class="titulo">Busque um Evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-search" placeholder="Procure aqui os seus eventos">
        </form>
    </div>{{-- search-container --}}

    <div class="conteudo-principal">

        <div class="conteudo-topo"> 
            
            @if ('search' && $search!=
            '')

                <h2 class="titulo">Buscando por: {{ $search }}</h2>

            @else
                <h2 class="titulo"><i class="bi bi-calendar-event-fill"></i> Seus Eventos</h2>

                <p class="msg">Nao ha eventos registrados</p>
            @endif

        </div>{{-- conteudo-topo --}}

        <div class="eventos-container">
            @foreach ($events as $event)
                
            <div class="events-row">
                
                    <h3 class="titulo"><span class="material-symbols-outlined">
                        celebration
                    </span> Festas
                    </h3>
                    <div class="card-container">
                        <div class="card">
                            <img src="/img/events/{{ $event->imagem }}" alt="">
                            <div class="card-body">
                                <p class="card-date">10/12/2024</p>
                                <h5 class="card-title">{{ $event->titulo }}</h5>
                                <p class="card-participants">X Participantes</p>
                                <a href="#" class="btn">Saber Mais</a>
                            </div>{{-- card-body --}}
                        </div>{{-- card --}}
                    </div>{{-- card-container --}}
            </div>{{-- events-row --}}



                <div class="events-row">
                    <h3 class="titulo"><span class="material-symbols-outlined">
                        groups
                        </span> Eventos Sociais
                    </h3>
                    <div class="card-container">
                    
                        <div class="card">
                            <img src="/img/banner.jpg" alt="">
                            <div class="card-body">
                                <p class="card-date">10/12/2024</p>
                                <h5 class="card-title">Evento de PHP</h5>
                                <p class="card-participants">X Participantes</p>
                                <a href="#" class="btn">Saber Mais</a>
                            </div>{{-- card-body --}}
                        </div>{{-- card --}}
                    </div>{{-- card-container --}}
                </div>{{-- events-row --}}


            <div class="eventos-row">

                <h3 class="titulo"><span class="material-symbols-outlined">
                    festival
                    </span> Festivais
                </h3>

                <div class="card-container">
                    
                    <div class="card">
                        <img src="/img/banner.jpg" alt="">
                        <div class="card-body">
                            <p class="card-date">10/12/2024</p>
                            <h5 class="card-title">Evento de PHP</h5>
                            <p class="card-participants">X Participantes</p>
                            <a href="#" class="btn">Saber Mais</a>

                        </div>{{-- card-body --}}

                    </div>{{-- card --}}

                </div>{{-- card-container --}}

            </div>{{-- events-row --}}

            <div class="events-row">
                
                <h3 class="titulo"><span class="material-symbols-outlined">
                    music_note
                </span> Concertos
                </h3>

                <div class="card-container">

                    <div class="card">
                        <img src="/img/banner.jpg" alt="">
                        <div class="card-body">
                            <p class="card-date">10/12/2024</p>
                            <h5 class="card-title">Evento de PHP</h5>
                            <p class="card-participants">X Participantes</p>
                            <a href="#" class="btn">Saber Mais</a>
                            
                        </div>{{-- card-body --}}
                        
                    </div>{{-- card --}}
                    
                </div>{{-- card-container --}}
                
            </div>{{-- events-row --}}
            @endforeach
            @if(count($events) == 0 && $search)
            <p>Nao foi possivel encontrar nenhum evento com {{$search}}! <a href="/">Ver todos</a></p>
            @elseif(count($events) == 0)
                <p>Nao ha eventos disponiveis</p>   
            @endif    
        </div>{{-- eventos-container --}}    
        
    </div>{{-- conteudo-principal --}}
@endsection

@section('footer')
    <p>agenciaWDX&copy;</p>
@endsection