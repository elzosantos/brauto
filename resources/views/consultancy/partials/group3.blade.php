<form method="POST" action="{{ route('consultancies.evaluations') }}">
    @csrf

    <input type="hidden" name="type_consultancy"
        value="{{ App\Enums\Reports\Default\TypeConsultancy::ANALISE_EXTERIOR }}">

    <input type="hidden" name="consultancy_id" value="{{ $idConsult }}">
    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                    ANÁLISE EXTERIOR
                </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Análise de Pintura
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Teto / Capota
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="teto_cap" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_cap">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="teto_cap" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_cap">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="teto_cap" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_cap">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="teto_cap" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_cap">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="teto_cap" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_cap">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_teto_cap" name="obs_teto_cap" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                        focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna A (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_a_esq_mot" name="obs_col_a_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna B (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_b_esq_mot" name="obs_col_b_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna C (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_c_esq_mot" name="obs_col_c_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral tras. (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_lat_tras_esq_mot" name="obs_lat_tras_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Porta tras. (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_tras_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_tras_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_tras_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_tras_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_tras_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_tras_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_tras_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_tras_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_por_tras_esq_mot" name="obs_por_tras_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Porta diant. (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_dian_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_dian_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_dian_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_dian_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_dian_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_dian_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_dian_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_dian_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="por_dian_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="por_dian_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_por_dian_esq_mot" name="obs_por_dian_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Para-lama (Esq/Mot)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_lam_esq_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_lam_esq_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_lam_esq_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_lam_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_lam_esq_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_lam_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_lam_esq_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_lam_esq_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_lam_esq_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_lam_esq_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_para_lam_esq_mot" name="obs_para_lam_esq_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna A (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_a_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_a_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_a_dir_psg" name="obs_col_a_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna B (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_b_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_b_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_b_dir_psg" name="obs_col_b_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Coluna C (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="col_c_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="col_c_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_col_c_dir_psg" name="obs_col_c_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral tras. (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="lat_tras_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_lat_tras_dir_psg" name="obs_lat_tras_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Porta tras. (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_tras_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_tras_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_tras_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_tras_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_tras_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_tras_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_tras_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_tras_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_port_tras_dir_psg" name="obs_port_tras_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Porta diant. (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_dian_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_dian_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_dian_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_dian_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_dian_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_dian_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_dian_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_dian_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="port_dian_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="port_dian_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_port_dian_dir_psg" name="obs_port_dian_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Para-lama (Dir/psg)
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="par_lam_dir_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="par_lam_dir_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="par_lam_dir_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="par_lam_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="par_lam_dir_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="par_lam_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="par_lam_dir_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="par_lam_dir_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="par_lam_dir_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="par_lam_dir_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_par_lam_dir_psg" name="obs_par_lam_dir_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Capô
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="capo" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capo">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="capo" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capo">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="capo" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capo">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="capo" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capo">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="capo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capo">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_capo" name="obs_capo" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Para-choque dianteiro
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_dian" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_dian">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_dian" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_dian">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_dian" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_dian">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_dian" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_dian">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_dian" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_dian">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_para_cho_dian" name="obs_para_cho_dian" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Tampa traseira:

                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="tamp_tras" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tamp_tras">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="tamp_tras" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tamp_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="tamp_tras" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tamp_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="tamp_tras" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tamp_tras">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="tamp_tras" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tamp_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_tamp_tras" name="obs_tamp_tras" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Para-choque traseiro
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_tras" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_tras">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_tras" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_tras" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_tras" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_tras">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="para_cho_tras" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_cho_tras">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_para_cho_tras" name="obs_para_cho_tras" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Caixa de ar mot
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_mot" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_mot">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_mot" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_mot" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_mot" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_mot">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_mot">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_cai_ar_mot" name="obs_cai_ar_mot" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Caixa de ar pasg:
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_psg" type="radio" value="2"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_psg">
                    <span class="ml-1   text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_psg" type="radio" value="3"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Repintura Simples') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_psg" type="radio" value="4"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Presença de massa') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_psg" type="radio" value="5"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_psg">
                    <span
                        class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Inconclusivo por conta do material/adesivo') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-2 py-4 dark:border-neutral-500">
                    <input id="cai_ar_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cai_ar_psg">
                    <span class="ml-1 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_cai_ar_psg" name="obs_cai_ar_psg" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Estética Exterior
                </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Área Frontal

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_front" type="radio" value="6"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_front">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_front" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_front">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_front" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_front">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Área traseira / Caçamba

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_tras" type="radio" value="6"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_tras" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="area_tras" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="area_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral Esquerda

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq" type="radio" value="6"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral Direita

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir" type="radio" value="6"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Teto / Capota

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_capota" type="radio" value="6"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_capota">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_capota" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_capota">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_capota" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_capota">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_estetica_ext" name="obs_estetica_ext" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Avaliação de Faróis </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Faróis

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_farois" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_farois">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Faróis auxiliares / neblina

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_farol_aux" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_farol_aux">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol_aux" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol_aux">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol_aux" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol_aux">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="farol_aux" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="farol_aux">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    DRL

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_drl" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_drl">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="drl" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="drl">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="drl" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="drl">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="drl" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="drl">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Piscas laterais

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_piscas_lat" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_piscas_lat">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="piscas_lat" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="piscas_lat">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="piscas_lat" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="piscas_lat">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="piscas_lat" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="piscas_lat">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lanternas

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_lanternas" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_lanternas">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lanternas" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lanternas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lanternas" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lanternas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lanternas" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lanternas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Luzes de placas

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_luzes_placas" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_luzes_placas">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="luzes_placas" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="luzes_placas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="luzes_placas" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="luzes_placas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="luzes_placas" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="luzes_placas">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_luzes_placas" name="obs_luzes_placas" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Testes de lampadas

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_testes_lamp" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_testes_lamp">

                </td>


                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="testes_lamp" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="testes_lamp">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="testes_lamp" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="testes_lamp">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_testes_lamp" name="obs_testes_lamp" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>

            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Avaliação de Vidros </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Para-brisa

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_para_brisa_vid" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_para_brisa_vid">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="para_brisa_vid" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_brisa_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="para_brisa_vid" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_brisa_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="para_brisa_vid" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="para_brisa_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral esquerda

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_lat_esq_vid" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_lat_esq_vid">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq_vid" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq_vid" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_esq_vid" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_esq_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lateral direita

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_lat_dir_vid" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_lat_dir_vid">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir_vid" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir_vid" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lat_dir_vid" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lat_dir_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Traseiro

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_tras_vid" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_tras_vid">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="tras_vid" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tras_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="tras_vid" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tras_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="tras_vid" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="tras_vid">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Teto solar

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_teto_solar" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_teto_solar">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_solar" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_solar">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_solar" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_solar">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="teto_solar" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="teto_solar">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espelhos retrovisores

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_espelhos_ret" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_espelhos_ret">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="espelhos_ret" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="espelhos_ret">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="espelhos_ret" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="espelhos_ret">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="espelhos_ret" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="espelhos_ret">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_espelhos_ret" name="obs_espelhos_ret" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Limpador dianteiro

                </td>


                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="limpa_dian" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="limpa_dian">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="limpa_dian" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="limpa_dian">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Limpador traseiro

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="limpa_tras" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="limpa_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="limpa_tras" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="limpa_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="limpa_tras" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="limpa_tras">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Lente do retrovisor

                </td>



                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lent_retro" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lent_retro">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lent_retro" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lent_retro">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_lent_retro" name="obs_lent_retro" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>

            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Avaliação de Cintos </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Motorista

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_cinto_mot" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_cinto_mot">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_mot" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_mot">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_mot" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_mot">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_mot" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_mot">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Passageiro

                </td>
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ano:') }}</span>
                    <input id="ano_cinto_psg" type="text"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ano_cinto_psg">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_psg" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_psg">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_psg" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_psg">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cinto_psg" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cinto_psg">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_cinto" name="obs_cinto" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>


            </tr>

            <tr>
                <td colspan="6" scope="col"
                    class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Avaliação de Cofre </td>
            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Vestígios em parafusos de capo

                </td>


                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vest_paraf_capo" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vest_paraf_capo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vest_paraf_capo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vest_paraf_capo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Vestígios em parafusos do paralama

                </td>


                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vest_paraf_paral" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vest_paraf_paral">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vest_paraf_paral" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vest_paraf_paral">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presilhas plásticas

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="presi_plast" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="presi_plast">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="presi_plast" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="presi_plast">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="presi_plast" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="presi_plast">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Vedações

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vedacoes" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vedacoes">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vedacoes" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vedacoes">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="vedacoes" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="vedacoes">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Parede corta fogo

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="prd_corta_fogo" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="prd_corta_fogo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="prd_corta_fogo" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="prd_corta_fogo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="prd_corta_fogo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="prd_corta_fogo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Revestimento de capo

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="revest_capo" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="revest_capo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="revest_capo" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="revest_capo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="revest_capo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="revest_capo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Haste de apoio / Amortecedor

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="hast_apoio_amort" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="hast_apoio_amort">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="hast_apoio_amort" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="hast_apoio_amort">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="hast_apoio_amort" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="hast_apoio_amort">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Capas e coberturas

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="capas_cobert" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capas_cobert">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="capas_cobert" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capas_cobert">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="capas_cobert" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="capas_cobert">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Sistema de admissão

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="sist_admis" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="sist_admis">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="sist_admis" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="sist_admis">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="sist_admis" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="sist_admis">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Reservatório de fluído de arrefecimento

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_flui_arr" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_flui_arr">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_flui_arr" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_flui_arr">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_flui_arr" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_flui_arr">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Reservatório de óleo de direção

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_dir" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_dir" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_dir" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_dir">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Reservatório de óleo de freio

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_freio" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_freio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_freio" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_freio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_oleo_freio" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_oleo_freio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Reservatório de partida a frio

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_part_frio" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_part_frio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_part_frio" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_part_frio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_part_frio" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_part_frio">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Reservatório de limpador de párabrisa

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_lim_par" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_lim_par">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_lim_par" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_lim_par">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="reserv_lim_par" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="reserv_lim_par">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Vareta de medição de óleo

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="var_med_oleo" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="var_med_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="var_med_oleo" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="var_med_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="var_med_oleo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="var_med_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bocal de abastecimento de óleo

                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="boc_abas_oleo" type="radio" value="8"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="boc_abas_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / D') }}</span>
                </td>

                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="boc_abas_oleo" type="radio" value="1"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="boc_abas_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="boc_abas_oleo" type="radio" value="0"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="boc_abas_oleo">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="1" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                </td>
                <td colspan="5" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                    <textarea id="obs_cofre" name="obs_cofre" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
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
