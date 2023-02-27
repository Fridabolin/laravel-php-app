@extends('layouts.layout')

@section('content')
<style>
h1{
 color:pink;
}

.menu-wrapper{
    display:flex;
    flex-direction: column;
    height: 100vh;
    padding:2rem;
}

.pizza-menu{
    padding-top:2rem;
}

.pizzas{
    padding-top:1rem;
}
</style>
        <div class="menu-wrapper">
          <h1>Order for {{$pizza->name}}</h1>
          <p>Type - {{ $pizza->type}}</p>
          <p>Base - {{ $pizza->base}}</p>
          <p>Toppings -</p>
          <ul>@foreach($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
          </ul>
          <form action="/pizzas/{{$pizza->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button>Complete Order</button>
        </form>
          <div>
            <a href="/pizzas">Back to all pizzas</a>
         </div>
        </div>


@endsection
