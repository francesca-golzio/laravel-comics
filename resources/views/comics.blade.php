
@extends('layouts.main')

@php
$comics = require('../././config/comics.php');
@endphp

@section('contenuto')
  <div class="container">

    <div class="half_up_label text-uppercase">popular comics</div>

    <div class="row row-cols-6">

      @foreach($comics as $comic)


      <x-card>
        <x-slot:imageUrl>{{ $comic['thumb'] }}</x-slot>        
        <x-slot:title>{{ $comic['title'] }}</x-slot>
      </x-card>

      @endforeach

    </div>
  </div>
@endsection