
@extends('layouts.main')

@php
$comics = require('../././config/comics.php');
@endphp

@section('contenuto')

<x-detail-card>
  <x-slot:title>{{ $comics[0]['title'] }}</x-slot>
  <x-slot:description>{{ $comics[0]['description'] }}</x-slot>
  <x-slot:thumb>{{ $comics[0]['thumb'] }}</x-slot>
  <x-slot:series>{{ $comics[0]['series'] }}</x-slot>
  <x-slot:artists>{{ $comics[0]['artists'][0] }}</x-slot>
  <x-slot:writers>{{ $comics[0]['writers'][0] }}</x-slot>
  <x-slot:price>{{ $comics[0]['price'] }}</x-slot>
</x-detail-card>
@endsection