@extends('layout')

@section('content')
@php $details = $character['data']['results'][0];
$comics = $comics['data']['results'];
$events = $events['data']['results'];
$series = $series['data']['results'];
$stories = $stories['data']['results'];

@endphp

<!-- component -->
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>


<div class="bg-gray-100">
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                             src="{{ $details['thumbnail']['path'] }}.{{ $details['thumbnail']['extension'] }}"
                             alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $details['name'] }}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">{{ $character['attributionText'] }}</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ $details['description'] }}</p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Resource Url</span>
                            <a href="{{ $details['resourceURI'] }}" class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Visit</span></a>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Last Modified</span>
                            <span class="ml-auto">{{ $details['modified'] }}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                @if(!is_null($comics))
                    @include('parts.character.comic', $comics)
                @endif

                <div class="my-4"></div>

                @if(!is_null($events))
                    @include('parts.character.events', $events)
                @endif


                <div class="my-4"></div>

                @if(!is_null($series))
                    @include('parts.character.series', $series)
                @endif

                <div class="my-4"></div>

                @if(!is_null($stories))
                    @include('parts.character.stories', $stories)
                @endif

                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>



@endsection
