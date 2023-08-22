<form method="POST" action="{{ route('consultancies.store') }}">
    @csrf
    <x-alert />
    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                     ANÁLISE MECÂNICA - B
                </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-xl">

                </td>
            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus / Freio / Suspensão Dianteira Esquerdo

                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Análise estrutural do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Observações:
                    <br><br><br><br>
                </td>


            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus / Freio / Suspensão Dianteira Direita

                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Análise estrutural do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Observações:
                    <br><br><br><br>
                </td>


            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus / Freio / Suspensão Traseira Direita


                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Análise estrutural do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Observações:
                    <br><br><br><br>
                </td>


            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus / Freio / Suspensão Traseira Esquerda


                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Análise estrutural do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Observações:
                    <br><br><br><br>
                </td>


            </tr>
            
        </tbody>
    </table>
    <div class="flex items-center justify-end mt-4">


        <x-primary-button class="ml-4">
            {{ __('Cadastrar') }}
        </x-primary-button>
    </div>
</form>
