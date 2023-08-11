
<ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 py-3">
    <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5">
        <span
            class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
            1
        </span>
        <span>
            <h4 class="pl-3 text-sm leading-tight"> Apresentação </h4>
 
        </span>
    </li>
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 px-2">
        <span
            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
        <span>
            <h3 class="pl-3 text-sm leading-tight">Historico e Dados</h3>
       
        </span>
    </li>
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
        <span
            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        <span>
            <h3 class="pl-3 text-sm leading-tight">Análise Exterior</h3>
 
        </span>
    </li>
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
        <span
            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            4
        </span>
        <span>
            <h3 class="pl-3 text-sm leading-tight">Análise Interior</h3> 
        </span>
    </li>
     
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
        <span
            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            5
        </span>
        <span>
            <h3 class="pl-3 text-sm leading-tight">Análise Mecânica</h3> 
        </span>
    </li>
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
        <span
            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            6
        </span>
        <span>
            <h3 class="pl-3  text-sm leading-tight">Análise Mecânica B</h3> 
        </span>
    </li>
    <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
        <span
            class=" flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            7
        </span>
        <span>
            <h3 class="pl-3 text-sm leading-tight">Mecânica Preventiva</h3> 
        </span>
    </li>
</ol>
<table class="min-w-full border  text-sm font-light dark:border-neutral-500">
    <thead class="border-b font- dark:border-neutral-500 text-center">
        <tr>
            <th colspan="6" scope="col"
                class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
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
            <td colspan="3"
                class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                 Responsável: Elzo Santos
            </td>


            <td colspan="3"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
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
            <td colspan="2"
                class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Marca')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Modelo')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>  
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
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
            <td colspan="2"
                class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Ano Modelo')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>  
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Cor')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>  
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
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
            <td colspan="2"
                class="px-6 py-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Km Atual')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div> 
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Placa')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>   
            </td>

            <td colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                <div>
                    <x-input-label for="name" :value="__('Renavam')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>  
            </td>

        </tr>
        <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
             
            
                
        </tr>
        

          
       
    </tbody>
</table>