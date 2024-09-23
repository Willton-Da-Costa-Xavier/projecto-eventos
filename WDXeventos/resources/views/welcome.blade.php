@extends('layout.main')
@section('title', 'WDXeventos')
    
@section('content')
    <div class="search-container">
        <h2>Busque um Evento</h2>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-search">
        </form>
    </div>
@endsection