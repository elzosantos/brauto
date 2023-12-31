 <form method="POST" action="{{ route('consultancies.store') }}">
    <input type="hidden" name="type_consultancy"
         value="{{ App\Enums\Reports\Default\TypeConsultancy::APRESENTACAO }}">
     @csrf
     <x-alert />
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

             <x-text-input id="consultant_id" type="hidden" name="consultant_id" :value="Auth::user()->id" /> 

             <tr>
                 <td colspan="6" scope="col"
                     class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                     Informações gerais
                 </td>
             </tr>
             <tr
                 class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                 <td colspan="2" class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                     <div>

                         <x-input-label for="user_id" :value="__('Cliente')" />

                         <select id="user_id" name="user_id" data-te-select-init
                             class="block mt-1 w-full dark:bg-gray-800">
                             <option value="0">Selecione</option>
                             <option value="99f2633b-e5e2-479b-a586-cb737f1008be">Juca Santos</option>
                             <option value="26">Tiago</option>
                             <option value="25">Pedro</option>
                      

                         </select>
                         <x-input-error :messages="$errors->get('user_id')" class="mt-2" />


                     </div>
                 </td>

                 <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                     <div>

                         <x-input-label for="vehicle_id" :value="__('Veiculo')" />

                         <select id="vehicle_id" name="vehicle_id" data-te-select-init
                             class="block mt-1 w-full dark:bg-gray-800">
                             <option value="0">Selecione</option>
                             <option value="99f2654e-31ef-4e19-b479-5b040e979674">i30</option>
                             <option value="26">Santa Fé</option> 

                         </select>
                         <x-input-error :messages="$errors->get('vehicle_id')" class="mt-2" />


                     </div>
                 </td> 
                 <td colspan="2" class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    <div>
                        <x-input-label for="km" :value="__('Km Atual')" />
                        <x-text-input id="km" class="block mt-1 w-full" type="text" name="km"
                            :value="old('km')" required autofocus autocomplete="km" />
                        <x-input-error :messages="$errors->get('km')" class="mt-2" />
                    </div>
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
