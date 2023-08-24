<form method="POST" action="{{ route('consultancies.evaluations') }}">
    @csrf

    <input type="hidden" name="type_consultancy"
        value="{{ App\Enums\Reports\Default\TypeConsultancy::ANALISE_MECANICA }}">
    <input type="hidden" name="consultancy_id" value=" ">
    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                    ANÁLISE MECÂNICA
                </th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus Dianteiro Esquerdo
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher marca
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Uniformidade de desgaste
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolha na parte externa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição estética da roda / calota
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpde">
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
                    <textarea id="obs_rpde" name="obs_rpde" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                        focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>



            </tr>

            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus Dianteiro Direito
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher marca
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Uniformidade de desgaste
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolha na parte externa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição estética da roda / calota
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpdd">
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
                    <textarea id="obs_rpdd" name="obs_rpdd" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>



            </tr>


            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus Traseiro Direito
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher marca
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Uniformidade de desgaste
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolha na parte externa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição estética da roda / calota
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rptd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rptd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rptd">
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
                    <textarea id="obs_rptd" name="obs_rptd" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>



            </tr>
            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Rodas / Pneus Traseiro Esquerdo
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher marca
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Uniformidade de desgaste
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolha na parte externa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição estética da roda / calota
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_rpte" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_rpte">
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
                    <textarea id="obs_rpte" name="obs_rpte" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </td>



            </tr>

            <tr>
                <td colspan="6" scope="col"
                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                    Estepe
                </td>
            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher marca
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="marca_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="marca_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="data_fab_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="data_fab_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="med_pneu_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="med_pneu_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="runflat_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="runflat_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="id_vida_util_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="id_vida_util_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Uniformidade de desgaste
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="unf_desgast_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="unf_desgast_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolha na parte externa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bolha_pt_ext_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bolha_pt_ext_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição estética da roda / calota
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_est">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="cond_est_rod_est" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="cond_est_rod_est">
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
                    <textarea id="obs_est" name="obs_est" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
