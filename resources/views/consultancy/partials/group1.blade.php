 <form method="POST" action="{{ route('consultancies.store') }}">
     @csrf

     <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
         <thead class="border-b font- dark:border-neutral-500 text-center">
             <tr>
                 <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                     GRUPO 1 - Histórico e Dados
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
                     Número de motor no documento:
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
                     Documento de rodagem:
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
                     Recibo de compra e venda / ATPV:
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
                     Documento de rodagem:
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
                     Manuais:
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
                     Chave principal:
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
                     Chave reserva:
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
                     Documento de rodagem:
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
                     Placa e lacre:
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
                 <td colspan="6"
                     class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Observações:
                     <br><br><br><br>
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
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Débitos (Multas e Impostos):

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
                     Alienação:

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
                     Propriedade:
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
                     Contrato social / Inventário:

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
                     Licenciamento:

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
                 <td colspan="6" 
                     class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"">
                     Observações:
                     <textarea id="obs"  
                     class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                     name="obs"rows="3" cols="120">  </textarea>
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
