<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Turista;
use App\Models\Reserva;

class EventController extends Controller
{
    
    public function index(){

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();
        }else{
            $events = Event::all();
        }

        return view('welcome',['events' => $events,'search'=>$search]);
    }


    public function pacote(){
        return view('events.pacote');
    }


    public function reserva(){
        return view('events.reserva');
    }


    public function create(){
        return view('events.create');
     }

    public function store(Request $request){
        $event =  new Event;

        $event->title =$request->title;
        $event->description =$request->description;
        $event->location=$request->location;
        $event->price=$request->price;
        $event->items=$request->items;
        $event->date=$request->date;
        $event->duration=$request->duration;
        $event->capacity=$request->capacity;

       

        


       //image upload
     if($request ->hasfile('image') && $request->file('image')->isValid()){
        $requestimage = $request->image;
        $extension = $requestimage->extension();
        $imageName =md5($requestimage->getClientOriginalName().strtotime('now')).".".$extension;
        $requestimage->move(public_path('img/events'),$imageName);
        $event->image=$imageName;
    }

    $user = auth()->user();
    $event->user_id = $user->id;

     $event->save();


       return redirect('/')->with('msg','Criado com sucesso!');
    }

    


    public function show($id){
        $event = Event::findOrFail($id);

      /*  $eventOwner = User::where('id',$event->user_id)->first()->toArray();


        return view('events.show', ['event' => $event,'eventOwner' =>$eventOwner]);*/
        return view('events.show', ['event' => $event]);

     }

    public function dashboard(){

        $user = auth()->user();
  
       
       $events = $user->events;
  
       return view('events.dashboard', ['events' => $events]);
    }



    
}

