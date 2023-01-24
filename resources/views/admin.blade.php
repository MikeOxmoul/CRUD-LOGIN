<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col justify-center items-center w-auto h-auto gap-8">
                        <a href="{{route('create')}}" class="rounded bg-white text-black p-4">UUS TOODE</a>
                        @foreach($tooted as $toode)
                            <div class="flex flex-col justify-center items-center bg-blue-400">
                                <p class="text-xl ml-2">toote pilt: {{ $toode->pilt }}</p>
                                <p class="text-xl ml-2">toote nimi: {{ $toode->nimi }}</p>
                                <p class="text-xl ml-2">toote hind: {{ $toode->hind }} eur</p>
                                <p class="text-xl ml-2">toote tootja: {{ $toode->tootja }}</p>
                                <div class="flex flex-row gap-4">
                                    <button class="rounded bg-red-600"><a href="{{ route('edit', ['toode' => $toode->id]) }}">Muuda</a></button>
                                    <button class="rounded bg-red-600"><a href="{{ route('destroy', ['toode' => $toode->id]) }}">Kustuta</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
