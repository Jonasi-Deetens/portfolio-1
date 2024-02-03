@extends('layout.layout')

@section('title')
    {{ env('APP_NAME') . ' - Home' }}
@endsection

@section('content')
    <h1 class="title"> ~ Welcome to your journey! ~</h1>
    <hr class="half-line">
    <section>
        <h2>Your destination for choosing a new destiny.</h2>
        <p>Here we provide premade journeys which will aid you through your travels in many different countries!</p>
        <p>You can go ahead and look at some of our offers on the 'Journeys' page.</p>
        <a class='link' href="{{ route('home') }}">Choose a destiny</a>
    </section>
@endsection