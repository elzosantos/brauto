<form method="POST" action="{{ route('consultancies.evaluations') }}">
    @csrf

    <input type="hidden" name="type_consultancy" value="{{ App\Enums\Reports\Default\TypeConsultancy::RESULTADO_FINAL }}">
    <input type="hidden" name="consultancy_id" value="{{ $idConsult }}">
    <x-alert />
    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                    Resultado Final da Consultoria
                </th>

            </tr>
        </thead>
        <tbody>
            <tr
            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
            <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <input id="resultado" type="radio" value="3"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="resultado">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovada com ressalva') }}</span>
            </td>
            <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <input id="resultado" type="radio" value="1"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="resultado">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovada') }}</span>
            </td>
            <td  colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <input id="resultado" type="radio" value="2"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="resultado">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovada') }}</span>
            </td>

        </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6"
                    class=" row-span-4 py-3 px-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Observações:
                    <textarea id="obs_resultado"
                        class="rounded dark:bg-gray-900  border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="obs_resultado" rows="1" cols="100">  </textarea>
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
