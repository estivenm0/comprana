<section class="flex flex-col gap-3 md:flex-row">
    {{-- -----search box---- --}}
    <div class="flex" x-data="{query: '{{request('search'), '' }}' }" >
        <input @keyup.enter="$dispatch('search', {value: query})"
            type="text" placeholder="Buscar Producto" x-model="query"
            class="w-full h-10 px-3 border-2 rounded-l md:w-80 border-sky-500 focus:outline-none focus:border-sky-500" >
        <button x-on:click="$dispatch('search', {value: query})"
            class="px-2 py-0 text-white rounded-r bg-sky-500 md:px-3 md:py-1">
            {{__('Buscar')}}
        </button  >
    </div>


    {{-- ---select section--- --}}
    <div class="relative py-1 border-2 cursor-pointer md:min-w-52 group border-sky-500">

        {{-- button --}}
        <div class="flex items-center justify-between px-2 bg-white">
            <a class="text-base font-medium text-black menu-hover lg:mx-4" onClick="">
                {{request('section', 'Selecciona Sección')}}
            </a>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>
        {{-- options --}}
        <div
            class="max-h-[50vh] overflow-y-scroll invisible absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible">

            @foreach ($sections as $section)
            <a wire:navigation href="{{route('products.index', ['section'=> $section->name])}}"
                class="block py-1 my-2 font-semibold text-gray-500 border-b border-gray-100 hover:text-black md:mx-2">
                {{$section->name}}
            </a>
            @endforeach
        </div>
    </div>
</section>