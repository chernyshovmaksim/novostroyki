<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name', 'Laravel') }}
        </h2>
        <h4 class="font-semibold text-gray-800 leading-tight">Если вы планируете купить / Если уже купили</h4>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class="py-2 px-4 rounded bg-gray-500 text-white font-semibold">Ваш заработок на сайте</button>
                    <x-first-dialog></x-first-dialog>
                    <ol class="mt-4 list-decimal">
                        <li>
                            Если вы планируете купить квартиру в новостройке, вам нужно знать:
                            <button data-fancybox="dialog-1" data-src="#dialog-content-1"
                                class="text-blue-600">Подробнее.</button>
                        </li>
                        <li>Если вы уже купили квартиру в новостройке, вы должны контролировать: <a href="#"
                                class="text-blue-600">Подробнее.</a></li>
                    </ol>

                    <button class="py-2 px-4 mt-4 rounded bg-gray-500 text-white font-semibold">Сформировать
                        запрос</button>

                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Рекламный банер будет тут.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
