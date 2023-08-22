 <form method="POST" action="{{ route('consultancies.evaluations') }}">
     @csrf

     <input type="hidden" name="type_consultancy"
         value="{{ App\Enums\Reports\Default\TypeConsultancy::HISTORICO_DADOS }}">
     <input type="hidden" name="consultancy_id" value="99f265c5-26a8-4eb1-aec6-5248ad4cf0ad">
     <x-alert />
     <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
         <thead class="border-b font- dark:border-neutral-500 text-center">
             <tr>
                 <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                     Histórico e Dados
                 </th>

             </tr>
         </thead>
         <tbody>

             <tr>
                 <td colspan="6" scope="col"
                     class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                     Documentos
                 </td>
             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Número de chassi no documento:
                 </td>


                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="num_chassi" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="num_chassi" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="num_chassi" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="num_chassi" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Número de motor no documento:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="num_motor" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="num_motor" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="num_motor" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="num_motor" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Documento de rodagem:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="doc_rod" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="doc_rod" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="doc_rod" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="doc_rod" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Recibo de compra e venda / ATPV:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="rec_comp" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="rec_comp" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="rec_comp" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="rec_comp" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>

             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Manuais:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="manuais" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="manuais" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="manuais" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="manuais" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Chave principal:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="chave_pri" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="chave_pri" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="chave_pri" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="chave_pri" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Chave reserva:
                 </td>

                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="chave_re" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="chave_re" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="chave_re" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="chave_re" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>
             </tr>

             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Placa e lacre:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="placa_la" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="placa_la" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="placa_la" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="placa_la" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="6"
                     class=" row-span-4 py-3 px-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Observações:
                     <textarea id="obs_hist"
                         class="rounded dark:bg-gray-900  border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="obs_hist"rows="1" cols="100">  </textarea>
                 </td>


             </tr>

             <tr>
                 <td colspan="6" scope="col"
                     class="bg-color-blue text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                     Financeiro
                 </td>
             </tr>

             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Débitos (Multas e Impostos):

                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="debitos" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="debitos" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="debitos" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="debitos" value="2">
                     <span
                         class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento com solução') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="debitos" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="debitos" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Alienação:

                 </td>

                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="alien" type="radio"
                         class="alien dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="alien" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="alien" value="2">
                     <span
                         class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Apontamento com solução') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="alien" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="alien" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Propriedade:
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="prop" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="prop" value="4">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Física') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="prop" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="prop" value="3">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Jurídica') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="prop" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="prop" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Contrato social / Inventário:

                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="cont_soc" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="cont_soc" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="cont_soc" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="cont_soc" value="5">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Sem necessidade') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="cont_soc" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="cont_soc" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Licenciamento:

                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="licen" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="licen" value="1">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Aprovado') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="licen" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="licen" value="0">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Reprovado') }}</span>
                 </td>
             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="2" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Observações:
                 </td>
                 <td colspan="4" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">

                     <textarea id="obs_financ"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="obs"rows="1" cols="100">  </textarea>
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
