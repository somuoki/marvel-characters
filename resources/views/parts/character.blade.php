<div class="p-4 md:w-1/4">
    <div class='flex max-w-sm w-full h-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='bg-gray-800'></div>

        <div class="overflow-hidden w-full rounded-xl relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card" data-movie-id="438631">
            <div class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent"></div>
            <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity="" href="https://www.youtube.com/embed/aSHs224Dge0">
                <div class="poster__info align-self-end w-full">
                    <div class="h-32"></div>
                    <div class="space-y-6 detail_info">
                        <div class="flex flex-col space-y-2 inner">
                            <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">{{ $character['name'] }}</h3>
                        </div>
                        <div class="flex flex-row justify-between datos">
                            <div class="flex flex-col datos_col">
                                <div class="popularity">{{ $character['comics']['available'] }}</div>
                                <div class="text-sm text-gray-400">Comics:</div>
                            </div>
                            <div class="flex flex-col datos_col">
                                <div class="release">{{ $character['stories']['available'] }}</div>
                                <div class="text-sm text-gray-400">Stories:</div>
                            </div>
                            <div class="flex flex-col datos_col">
                                <div class="release">{{ $character['events']['available'] }}</div>
                                <div class="text-sm text-gray-400">Events:</div>
                            </div>
                            <div class="flex flex-col datos_col">
                                <div class="release">{{ $character['series']['available'] }}</div>
                                <div class="text-sm text-gray-400">Series:</div>
                            </div>
                        </div>
                        <div class="flex flex-col overview">
                            <div class="flex flex-col"></div>
                            <div class="text-xs text-gray-400 mb-2">Description:</div>
                            <p class="text-xs text-gray-100 mb-6">
                                {{ $character['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img class="absolute inset-0 transform w-full -translate-y-4" src="{{ $character['thumbnail']['path'] }}.{{ $character['thumbnail']['extension'] }}" style="filter: grayscale(0);" />
            <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10">
                <a
                    class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-red-500 hover:bg-red-700"
                    href="{{ url('character/'.$character['id']) }}"
                    target="_blank"
                    data-unsp-sanitized="clean"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="text-sm text-white ml-2">View More</div>
                </a>
            </div>
        </div>

    </div>

</div>
