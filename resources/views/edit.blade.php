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
                        <form action="{{ route('update', ['toode' => $toode->id]) }}" method="POST">
                            @csrf
                            <div class="flex flex-col gap-8">
                                <input type="text" name="nimi" placeholder="nimi" class="text-black" value="{{ $toode->nimi }}">
                                <input type="text" name="hind" placeholder="hind" class="text-black" value="{{ $toode->hind }}">
                                <input type="text" name="pilt" placeholder="pildi link" class="text-black" value="{{ $toode->pilt }}">
                                <input type="text" name="tootja" placeholder="tootja" class="text-black" value="{{ $toode->tootja }}">
                                <input type="submit">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
