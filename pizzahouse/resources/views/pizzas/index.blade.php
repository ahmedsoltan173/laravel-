@extends('layouts.app')
@section('content')
    {{--<p>{{ $type }} - {{ $base  }} - {{ $price }}$</p>
    @if ($price>15)
        <p>pizza is Expensive</p>
    @elseif($price<5)
        <p> This Pizza IS cheap</p>
    @else
        <p>This pizza is normaly price</p>
    @endif
    @unless($base =='chesy crust')
        <p>you dont have chesy crust</p>
    @endunless


    @php
        $name ?? ''="Ahmed";
        echo ("$name ?? ''");
    @endphp --}}
    {{-- @for ($i =0 ; $i < 5; $i++)
        <p>the value is {{ $i }}</p>
    @endfor --}}
    {{-- @for ($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
    @endfor --}}
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach ($pizzas as$pizza )
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
    <h4><a href="/pizzas/{{ $pizza->id }}">  {{ $pizza->name }}</a></h4>
        </div>
    @endforeach
</div>
@endsection
