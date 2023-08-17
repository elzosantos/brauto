 <form method="POST" action="{{ route('consultancies.store') }}">
     @csrf

     <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
         <thead class="border-b font- dark:border-neutral-500 text-center">
             <tr>
                 <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                     Consultaria Veícular - 250s
                 </th>

             </tr>
         </thead>
         <tbody>
             <tr>
                 <td colspan="6" scope="col"
                     class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 text-lg">
                     Apresentação
                 </td>
             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="3" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     Responsável: Elzo Santos
                 </td>


                 <td colspan="3" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     Data: 10/08/2023
                 </td>


             </tr>
             <tr>
                 <td colspan="6" scope="col"
                     class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                     Dados do Veículo
                 </td>
             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="2" class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Marca')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Modelo')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Versão')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>


             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="2" class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Ano Modelo')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Cor')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Cliente')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>


             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="2" class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Km Atual')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Placa')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>
                         <x-input-label for="name" :value="__('Renavam')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>
                 </td>

             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">



             </tr>




         </tbody>
     </table>
     <div class="flex items-center justify-end mt-4">


         <x-primary-button class="ml-4">
             {{ __('Cadastrar') }}
         </x-primary-button>
     </div>
 </form>
