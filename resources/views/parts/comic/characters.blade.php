

    <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
        <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
            <a href="{{ url('character/'.$character['id']) }}" >
            <img src="{{ $character['thumbnail']['path'] }}.{{ $character['thumbnail']['extension'] }}"
                 alt=""
                 class="h-full w-full">
            </a>
        </div>

        <a href="{{ url('character/'.$character['id']) }}" ><h2 class="mt-4 font-bold text-xl">{{ $character['name'] }}</h2></a>

        <p class="text-xs text-gray-500 text-center mt-3">
            {{ $character['description'] }}
        </p>

    </div>
