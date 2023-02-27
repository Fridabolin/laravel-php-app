@extends('layouts.app')

@section('content')

        <div class="menu-wrapper">
            <div><h1>Orders</h1></div>

            @if(!empty($pizzas) && $pizzas->count() > 0)
            <div class="order-list">
                @foreach($pizzas as $pizza)
                <div class="order">
                   <div class="contact-information">
                       <p><b>{{ $pizza->created_at}}</b></p>
                       <p>Contact information</p>
                       <div>
                           <ul>
                               <li>Name: <span>{{ $pizza->name}}</span></li>
                               <li> Number: <span>{{ $pizza->phone}}</span></li>
                               <li> Adress: <span>{{ $pizza->address}}</span></li>
                           </ul>
                       </div>
                   </div>
                   <div class="pizza-information">
                       <p>Pizza</p>
                       <ul>
                           <li>Type: <span>{{ $pizza->type}}</span></li>
                           <li>Base:<span>{{ $pizza->base}}</span></li>
                       </ul>
                       <ul>
                           <p>Toppings</p>
                           @foreach($pizza->toppings as $topping)
                           @if($topping)
                           <li>{{$topping}}</li>
                           @else
                           <p>No toppings orderd</p>
                           @endif
                           @endforeach
                       </ul>
                       <form action="/pizzas/{{$pizza->id}}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button>Complete Order</button>
                         </form>
                   </div>
                </div>
               @endforeach
           </div>
            @else <div class="no-orders"><p>There are no orders..</p></div>
            @endif


        </div>
@endsection
