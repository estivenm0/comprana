<x-app-layout>
<x-slot name="header">
<h2 class="text-xl font-semibold leading-tight text-gray-800">
    {{ __('Estado de Compra') }}
</h2>
</x-slot>

<div class=" sm:px-10 my-10 sm:my-28">
        <div
            class="md:w-1/2 mx-auto flex justify-center bg-white dark:bg-gray-900 items-center px-6 py-4 text-sm border-t-2 rounded-b shadow-sm border-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500 stroke-current" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <div class="ml-3">
                <div class="font-bold text-left text-black dark:text-gray-50">Compra realizada correctamente.</div>
                <a href="{{route('orders.index')}}" class="w-full text-gray-900 underline hover:text-violet-500 dark:text-gray-300 mt-1">Ver mis pedidos.</a>
            </div>
        </div>

</div>

<x-commons.footer />
</x-app-layout>