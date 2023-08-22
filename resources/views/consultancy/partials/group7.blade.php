<form method="POST" action="{{ route('consultancies.store') }}">
    @csrf
    <x-alert />
    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                    Avaliação de Mecânica Preventiva
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
                    Histórico de Manutenção
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Histórico de manutenção preventiva anual:
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Manual carimbado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Notas fiscais
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Previsão da próxima revisão preventiva:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Data:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Quilometragem:
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">

                <td colspan="6" class="whitespace-nowrap border-r px-1 py-1 dark:border-neutral-500">
                    Observações: <br><br><br>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bateria / Fabricante:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    CVC __ | EFB __ | AGM __
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Bateria auxiliar / Start Stop:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Correia dentada:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Correias de acessórios / Rolamentos / Tensores:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Coxins de motor:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Coxins de câmbio:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Filtro de ar:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Filtro de ar condicionado:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Velas:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Filtro de combustível:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Óleo de diferencial:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Fluído de freio:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Óleo de direção hidráulica:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Óleo de câmbio:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    N/A
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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

            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Teste de Rodagem
                </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Partida no motor:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Marcha lenta sem ar condionado:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Marcha lenta com ar condicionado:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruído do motor a 3500rpm (Motor aquecido):

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruído do motor em carga (Motor aquecido):

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruido do motor em queda de carga (Motor aquecido):

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Comportamento de subida de marcha em baixo rpm:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Comportamento de subida de marcha em alto rpm:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Comportamento embreagem / automatizado / conversor:


                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruído ao esterçar volante parado:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruído ao esterçar volante andando:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Controles dinâmicos de estabilidade:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Reversão de manobra:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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
                    Ruído ao passar por ondulações / lombada / valeta:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
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

        </tbody>
    </table>
    <div class="flex items-center justify-end mt-4">


        <x-primary-button class="ml-4">
            {{ __('Cadastrar') }}
        </x-primary-button>
    </div>
</form>
