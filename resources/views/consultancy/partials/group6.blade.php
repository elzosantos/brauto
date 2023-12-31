<form method="POST" action="{{ route('consultancies.evaluations') }}">
    @csrf

    <input type="hidden" name="type_consultancy"
        value="{{ App\Enums\Reports\Default\TypeConsultancy::ANALISE_MECANICA_B }}">
    <input type="hidden" name="consultancy_id" value="{{ $idConsult }}">
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
                    <input id="anali_est_p_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="anali_est_p_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsde" type="radio"
                        class="eixo_ter_dir_rpfsde dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
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
                    <input id="lin_hid_ele_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsde">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsde" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsde">
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
                    <textarea id="obs_rpfsde" name="obs_rpfsde" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
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
                    <input id="anali_est_p_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="anali_est_p_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
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
                    <textarea id="obs_rpfsdd" name="obs_rpfsdd" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
        focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
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
                    <input id="anali_est_p_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="anali_est_p_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfsde">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfsdd" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfsdd">
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
                    <textarea id="obs_rpfsdd" name="obs_rpfsdd" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
        focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
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
                    <input id="anali_est_p_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="anali_est_p_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="anali_est_p_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Presença de bolhas na parte interna
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pre_bol_part_int_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pre_bol_part_int_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condições internas da roda e originalidade
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_int_rod_ori_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_int_rod_ori_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Condição visual de disco / tambor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="con_vis_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="con_vis_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do disco
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_dis_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_dis_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>

            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil da pastilha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="ind_vid_past_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="ind_vid_past_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Batente / coifa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bat_coifa_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bat_coifa_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Amortecedor
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="amort_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="amort_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Mola / Bolsa
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="mol_bol_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="mol_bol_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bandejas / braços / bucha
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="band_bra_bu_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="band_bra_bu_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bieleta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bieleta_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bieleta_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Pivôs
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="pivo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="pivo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Bucha da barra est.
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="bucha_bar_est_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="bucha_bar_est_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Homocinética / Trizeta
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Eixo / Terminal de direção
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfsdte">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="eixo_ter_dir_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="eixo_ter_dir_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Linha hidráulica / elétrica
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfste">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Análise necessita de desmontagem ou n/a') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Nova') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Meia vida') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfste">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Troca em breve') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="lin_hid_ele_rpfste" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="lin_hid_ele_rpfste">
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
                    <textarea id="obs_rpfste" name="obs_rpfste" rows="1"
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
