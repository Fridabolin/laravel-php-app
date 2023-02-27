@extends('layouts.layout')

@section('content')

        <div class="menu-wrapper">
        <div class="hero"></div>
         <h1>Add a new pizza</h1>
         <form action="/pizzas" method="POST">
            @csrf
            <div class="customer-information">
                <div class="info">
                     <label>Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="info" >
                    <label>Phone number:</label>
                   <input type="text" id="name" name="phone">
               </div>
               <div class="info" >
                <label>Adress:</label>
               <input type="text" id="name" name="address">
           </div>
            </div>

            <div class="info">
                <label for="type"><b>Pizza type</b></label>
               <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaian">Hawaian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
               </select>
           </div>

           <div class="info">
            <label for="base"><b>Base type</b></label>
           <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin crisp">Thin Crisp</option>
            <option value="thick">Thick</option>
           </select>
           <div class="info checkbox">
            <label><b>Toppings</b></label>
            <div class="toppings">
                <p>Mozarella</p> <input type="checkbox" name="toppings[]" value="Mozarella">
            </div>
            <div class="toppings">
                <p>Peperoni</p> <input type="checkbox" name="toppings[]" value="Peperoni">
            </div>

            <div class="toppings">
                <p>Jalapeno</p>  <input type="checkbox" name="toppings[]" value="Jalapeno">
            </div>
           </div>
       </div>
            <input class="submit-button" type="submit" value="Order Pizza">
         </form>
        </div>
@endsection
