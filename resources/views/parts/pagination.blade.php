@if(request()->is('page/*') || request()->is('/'))
    <div class='flex items-center justify-center'>
        <div class="flex flex-col items-center mb-8 px-4 mx-auto mt-8">
            <div class="font-sans flex justify-end space-x-1 select-none">
                <a href="{{ url('page/'.(intval(request()->segment(2)) - 1)) }}" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md {{ request()->segment(2) > 1 ? 'cursor-not-allowed' : '' }}">
                    Previous
                </a>
                <a href="{{ url('page/'.( !is_null(request()->segment(2)) ? request()->segment(2) + 1 : 2 )) }}"
                   class="px-4 py-2 font-bold text-gray-500 bg-gray-300 rounded-md hover:bg-teal-400 hover:text-white {{ request()->segment(2) >= intval($characters['data']['total'] / 20) ? 'cursor-not-allowed' :  '' }}"
                   style="transition: all 0.2s ease;">
                    Next
                </a>
            </div>
        </div>
    </div>
@endif
