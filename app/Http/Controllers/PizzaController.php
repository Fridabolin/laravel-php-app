<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   public function index(){

    $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
        'pizzas' => $pizzas
    ]);
   }

   public function show($id){

    $pizza = Pizza::findOrFail($id);

    return view('pizzas.show', ['pizza' => $pizza]);
   }

   public function create(){
    return view('pizzas.create');
   }

   public function store(){
    $pizza = new Pizza();

    $pizza->name = request('name');
    $pizza->phone = request('phone');
    $pizza->address = request('address');
    $pizza->type = request('type');
    $pizza->base =  request('base');
    $pizza->toppings = request('toppings');

    $pizza->save();

    return redirect('/')->with('mssg', 'thanks for your order' );
   }

   public function destroy($id){
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas')->with('mssg', 'pizza was deleted');
   }

}
