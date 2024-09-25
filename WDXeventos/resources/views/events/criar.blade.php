@extends('layouts.main')
@section('title', 'Criar um Evento')
    
@section('content')
    <div class="event-create-container">
        <h2 class="titulo">Crie o seu Evento</h2>
        <hr>
        
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="imagem">Imagem do Evento: </label>
                <input type="file" name="imagem" id="imagem">
            </div>

            <div class="form-group">
                <label for="titulo">Evento:</label>
                <input type="text" name="titulo" id="titulo">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição do Evento:</label>
                <textarea name="descricao" id="descricao" placeholder="Descrição do Evento"></textarea>
            </div>

            <div class="form-group">
                <label for="data">Data do Evento:</label>
                <input type="date" name="data" id="data" class="form-control">   
            </div>

            <div class="form-group">
                <label for="cidade">Cidade do Evento:</label>
                <input type="text" name="cidade" id="cidade">
            </div>

            <div class="form-group">
                <label for="private">O Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                   <option value="0">Não</option>
                   <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo do Evento:</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="Festas">Festa</option>
                    <option value="Eventos Sociais">Evento Social</option>
                    <option value="Festivais">Festival</option>
                    <option value="Concertos">Concerto</option>
                 </select>
            </div>

            <div class="form-group">
                <label for="itens">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                   <input type="checkbox" name="itens[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                   <input type="checkbox" name="itens[]" value="Palco">Palco
                </div>
                <div class="form-group">
                   <input type="checkbox" name="itens[]" value="Cerveja gratis">Cerveja grátis
                </div>
                <div class="form-group">
                   <input type="checkbox" name="itens[]" value="Open Food">Open Food
                </div>
                <div class="form-group">
                   <input type="checkbox" name="itens[]" value="Brindes">Brindes
                </div>
            </div>
   
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
        <hr>
    </div>
@endsection

@section('footer')
    <p>agenciaWDX&copy;</p>
@endsection
