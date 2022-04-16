<div class="bg-white p-3 shadow-sm rounded-sm">
    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
        <span class="tracking-wide">Comics</span>
    </div>
    <!-- component -->
    <div class="flex items-center justify-center">

        <div class="grid grid-cols-6 gap-2 px-16">

            @foreach($comics as $comic)
                <div class="flex flex-col gap-1">

                    <!-- Image -->
                    <a href="" class="bg-purple-500">
                        <img src="{{ $comic['thumbnail']['path'] }}.{{ $comic['thumbnail']['extension'] }}" class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100" />
                    </a>

                    <!-- Games Title -->
                    <a href="{{ url('comic/'.$comic['id']) }}" class="hover:text-purple-500 text-gray-200 font-semibold"> {{ $comic['title'] }} </a>

                    <!-- Viewers -->
                    <span class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{ $comic['issueNumber'] }} </span>


                </div>
            @endforeach

        </div>

    </div>
</div>

