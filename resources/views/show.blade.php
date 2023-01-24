<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row gap-16">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            @if(Auth::user()->admin)
                <a class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" href="/admin">
                    Admin
                </a>
            @endif
        </div>

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
                            <div class="rounded bg-blue-400">
                                <img src="{{ $toode->pilt }}" class="w-48"/>
                                <p class="text-2xl ml-2">{{ $toode->nimi }}</p>
                                <p class="text-xl ml-2">{{ $toode->hind }} eur</p>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
