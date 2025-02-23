@extends('layouts.app')


@section('title', 'Home Page')

@section('content')

<x-home-slider-component />

<main>
    <x-search-form-component action="/search" method="GET" />
    <x-new-cars-component />
</main>

@endsection