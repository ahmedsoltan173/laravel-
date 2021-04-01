@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
    <h1>Creat a New Pizza</h1>
    <form action="/pizzas" method="POST">
        {{-- @csrf to send you to  the action page after submit --}}
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value='margherita'>Marghreta</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg-supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose Pizza Type:</label>
        <select name="base" id="base">
            <option value='chessy crust'>Chessy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label>Extra Toppings:</label><br>
                <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br>
            </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection
