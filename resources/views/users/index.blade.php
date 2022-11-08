<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Anjas Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    @foreach($users as $item)
                        <li class="text-center"> Anjas Kelas </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>