<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([['titulo', 'like', '%' . $search . '%']])->get();

        }else{

            $events = Event::all();
        }
        return view('Welcome', ['events' => $events, 'search' => $search]);
    }

    public function criar(){
        return view('events.criar');
    }

    public function store(Request $request){

        $event = new Event;

        $event->titulo = $request->titulo;
        $event->descricao = $request->descricao;
        $event->cidade = $request->cidade;
        $event->data = $request->data;
        $event->private = $request->private;
        $event->tipo = $request->tipo;
        $event->itens = $request->itens;
        
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImg = $request->imagem;

            $extensao = $requestImg->extension();

            $imageName = md5($requestImg->getClientOriginalName(). strtotime('now')).".".$extensao;

            $requestImg->move(public_path('img/events'), $imageName);

            $event->imagem = $imageName;
        }

        $event->save();

        return redirect("/")->with('msg', 'Evento criado com sucesso!');

    }
}
