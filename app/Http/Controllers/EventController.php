<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function receitas()
    {
        $events = Event::paginate(6);
        return view('receitas', [EventController::class, 'events' => $events]);
    }

    public function addReceita()
    {
        return view('/events/create_receita');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $valid = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredientes' => 'required',
            'preparo' => 'required',
            'montagem' => 'required',
            'image' => 'required',
        ], [
            'title.required' => 'O campo título está vazio!',
            'description.required' => 'O campo descrição está vazio!',
            'ingredientes.required' => 'O campo ingredientes está vazio!',
            'preparo.required' => 'O campo modo de preparo está vazio!',
            'montagem.required' => 'O campo montagem da receita está vazio',
            'image.required' => 'O campo imagem está vazio!',
        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->ingredientes = $request->ingredientes;
        $event->preparo = $request->preparo;
        $event->montagem = $request->montagem;

        /* Imagem */
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . '.' . $extension);
            $requestImage->move(public_path('img/receitas'), $imageName);
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('mensage', 'Receita criada com sucesso!');
    }
}
