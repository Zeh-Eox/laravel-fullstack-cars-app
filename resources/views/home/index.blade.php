@extends('layouts.app')


@section('title', 'Home Page')

@section('content')

<x-home-slider-component />

<main>
    <x-search-form-component />
    <x-new-cars-component />
</main>

@endsection