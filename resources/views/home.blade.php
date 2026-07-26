@extends('layouts.main')

@php
$comics = require('../././config/comics.php');

$sample_comics = array_slice($comics, 0, 6);
@endphp

@section('contenuto')

<div class="half_up_label text-uppercase">Welcome to the DC Universe!</div>

<div class="container d-flex">
  
  <div class="call_to_action">
    
    <div class="d-flex justify-content-between align-items-baseline">
      <h4 class="text-center flex-shrink-0">Not sure where to start?</h4>  
      <span class="text-end">Check out our <a href="{{ route('comics') }}">comics</a>!</span>
    </div>
    
    <div class="row row-cols-6  d-flex justify-content-between">
      @foreach($sample_comics as $comic)
      <x-card>
        <x-slot:imageUrl>{{ $comic['thumb'] }}</x-slot>        
        <x-slot:title>{{ $comic['title'] }}</x-slot>
      </x-card>
      @endforeach
    </div>

  </div>

</div>
@endsection