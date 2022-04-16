@extends('layout')

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($characters['data']['results'] as $character)
                    @include('parts.character', $character)
                @endforeach
            </div>
        </div>
    </section>
    @include('parts.pagination', $characters)

@endsection

