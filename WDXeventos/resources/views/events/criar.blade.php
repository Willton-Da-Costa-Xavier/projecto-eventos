@extends('layouts.main')
@section('title', 'Criar um Evento')
    
@section('content')
    <div class="event-create-container">
        <h2 class="titulo">Crie o seu Evento</h2>
        <form action="">

            <div class="form-group">
                <label for="imgem">Imagem do Evento: </label>
                <input type="file" alt="" name="imgem" id="imagem">
            </div>

            <div class="form-group">
                <label for="titulo">Evento:</label>
                <input type="text" alt="" name="titulo" id="titulo">
            </div>

            <div class="form-group">
                <label for="descricao">Evento:</label>
                <textarea name="descricao" id="descricao" placeholder="Descricao do Evento"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Data do Evento:</label>
                <input type="date" name="date" id="date" class="form-control">   
            </div>

            <div class="form-group">
                <label for="cidade">Cidade do Evento:</label>
                <input type="text" alt="" name="cidade" id="cidade">
            </div>

            <div class="form-group">
                <label for="private">O Evento e privado?</label>
                <select name="private" id="private" class="form-control">
                   <option value="0">Nao</option>
                   <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo do Evento:</label>
                
                <select name="private" id="private" class="form-control">
                    <option value="Festas">Festa</option>
                    <option value="Eventos Sociais">Eventos Social</option>
                    <option value="Festivais">Festival</option>
                    <option value="Concertos">Concerto</option>
                 </select>
            </div>

            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="from-group">
                   <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
                </div>
   
                <div class="from-group">
                   <input type="checkbox" name="items[]" value="Palco">Palco
                </div>
   
                <div class="from-group">
                   <input type="checkbox" name="items[]" value="Cerveja gratis">Cerveja gratis
                </div>
   
                <div class="from-group">
                   <input type="checkbox" name="items[]" value="open Food">Open Food
                </div>
   
                <div class="from-group">
                   <input type="checkbox" name="items[]" value="Brindes">Brindes
                </div>
                
               </div>
   
               <input type="submit" value="Criar Evento" class="btn btn-primary">

        </form>
    </div>
@endsection

@section('footer')
    <p>agenciaWDX&copy;</p>
@endsection