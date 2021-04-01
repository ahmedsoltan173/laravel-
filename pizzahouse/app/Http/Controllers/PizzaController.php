<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizza;

class PizzaController extends Controller
{

    // public function __constract(){
    //     $this->middleware('auth');
    // }

    public function index(){
        //this the controller function the was in web.php
        // to get the data from db

        //$pizzas =pizza::all();    //to get the db
        //  $pizzas= pizza ::orderBy('name')->get();   //to show it from db as sort by alfabatekal   $pizzas= pizza ::orderBy('name','desc')->get();  to erverse it
       // $pizzas =pizza::where('type','hawaian')->get();  //to filter it to the have in the type == hawaian
       $pizzas=pizza::latest()->get();     //the lastest
        return view('pizzas.index',[
                'pizzas'=>$pizzas,
                ]);
    }
    public function show($id){
        $pizza=pizza::findOrFail($id);
        return view('pizzas.show',['pizza'=> $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
    //    error_log(request('name'));    //to post the db
    //    error_log(request('type'));    //to post the db
    //    error_log(request('base'));    //to post the db
        // to save the records

        $pizza =new pizza();

        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->toppings=request('toppings');
        // error_log($pizza);  its show you in the terminal that data you submit it
        $pizza->save();

        return redirect('/')->with('mssg','Thanks For Your Order');  //the massage that's show after the user do an order
    }

    public function destroy($id){
        $pizza =pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
