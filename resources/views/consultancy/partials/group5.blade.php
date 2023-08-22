 <form method="POST" action="{{ route('consultancies.store') }}">
     @csrf
     <x-alert />
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
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher data de fabricação
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                 </td>


             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher medida do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
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
                     Espec. Runflat (Reprovar caso não tenha estepe)
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Indíce de vida útil do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
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
                     Uniformidade de desgaste
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
                     Presença de bolha na parte externa
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
                     Condição estética da roda / calota
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
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher data de fabricação
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                 </td>


             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher medida do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
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
                     Espec. Runflat (Reprovar caso não tenha estepe)
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Indíce de vida útil do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
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
                     Uniformidade de desgaste
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
                     Presença de bolha na parte externa
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
                     Condição estética da roda / calota
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
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher data de fabricação
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                 </td>


             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Preencher medida do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
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
                     Espec. Runflat (Reprovar caso não tenha estepe)
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     Indíce de vida útil do pneu
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                 </td>
                 <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <input id="remember_me" type="radio"
                         class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                         name="remember">
                     <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
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
                     Uniformidade de desgaste
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
                     Presença de bolha na parte externa
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
                     Condição estética da roda / calota
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
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
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
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
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
                    Uniformidade de desgaste
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
                    Presença de bolha na parte externa
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
                    Condição estética da roda / calota
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
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('- de 5 anos') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('+ de 5 anos') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="4" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher data de fabricação
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Original') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Não Original') }}</span>
                </td>


            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="3" class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Preencher medida do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('N / A') }}</span>
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
                    Espec. Runflat (Reprovar caso não tenha estepe)
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('1a Linha') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('2a Linha') }}</span>
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Indíce de vida útil do pneu
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 76% a 100%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 51% a 75%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 26% a 50%') }}</span>
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    <input id="remember_me" type="radio"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('de 1% a 25%') }}</span>
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
                    Uniformidade de desgaste
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
                    Presença de bolha na parte externa
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
                    Condição estética da roda / calota
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
         </tbody>
     </table>
     <div class="flex items-center justify-end mt-4">


         <x-primary-button class="ml-4">
             {{ __('Cadastrar') }}
         </x-primary-button>
     </div>
 </form>
