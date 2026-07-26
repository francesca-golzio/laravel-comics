
@extends('layouts.main')

@php
$comics = require('../././config/comics.php');
@endphp

@section('contenuto')

<x-detail-card>
  <x-slot:title>{{ $comics[2]['title'] }}</x-slot>
  <x-slot:description>{{ $comics[2]['description'] }}</x-slot>
  <x-slot:thumb>{{ $comics[2]['thumb'] }}</x-slot>
  <x-slot:series>{{ $comics[2]['series'] }}</x-slot>
  <x-slot:artists>{{ $comics[2]['artists'][0] }}</x-slot>
  <x-slot:writers>{{ $comics[2]['writers'][0] }}</x-slot>
  <x-slot:price>{{ $comics[2]['price'] }}</x-slot>
</x-detail-card>
@endsection