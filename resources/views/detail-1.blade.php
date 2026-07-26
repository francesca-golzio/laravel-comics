
@extends('layouts.main')

@php
$comics = require('../././config/comics.php');
@endphp

@section('contenuto')

<x-detail-card>
  <x-slot:title>{{ $comics[1]['title'] }}</x-slot>
  <x-slot:description>{{ $comics[1]['description'] }}</x-slot>
  <x-slot:thumb>{{ $comics[1]['thumb'] }}</x-slot>
  <x-slot:series>{{ $comics[1]['series'] }}</x-slot>
  <x-slot:artists>{{ $comics[1]['artists'][0] }}</x-slot>
  <x-slot:writers>{{ $comics[1]['writers'][0] }}</x-slot>
  <x-slot:price>{{ $comics[1]['price'] }}</x-slot>
</x-detail-card>
@endsection