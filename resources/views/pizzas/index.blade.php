@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
<h1>Pizza Orders</h1>
  @if (count($pizzas) < 1)
    <p>All orders have been completed</p>
    
  @else
    @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{$pizza->id}}">{{ $pizza->name }}</a></h4>
    </div>
    @endforeach
  @endif
</div>

@endsection

