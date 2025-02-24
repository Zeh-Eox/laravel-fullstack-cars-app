<x-app-layout title="Home Page">

    <x-home-slider-component />

    <main>
        <x-search-form-component action="/search" method="GET" />
        <x-new-cars-component />
    </main>

</x-app-layout>