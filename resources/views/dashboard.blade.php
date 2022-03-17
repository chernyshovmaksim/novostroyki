<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name', 'Laravel') }}
        </h2>
        <h4 class="font-semibold text-gray-800 leading-tight">Если вы планируете купить / Если уже купили</h4>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @auth
                    <div id="refer-link" class="p-6 bg-white border-b border-gray-200 cursor-pointer">
                        Ваша реферальная ссылка:
                        <span class="bg-green-600 font-semibold p-2 rounded">
                            {{ url('') }}/refer/{{ Auth::user()->refer }}
                        </span>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    По вашей ссылке зарегистрировалось: {{$referals_count}}
                    <div class="mt-6">
                        @foreach ($referals as $item)
                        <div class="flex align-center p-6 rounded border-b border-gray-200">
                            <div class="font-black h-full border-r border-gray-200 pr-4">ID {{$item->id}}</div>
                            <div class="pl-4">{{$item->name}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
