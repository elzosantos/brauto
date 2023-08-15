<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Mes/Ano Referencia
                            </th>

                            <th scope="col"
                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Marca
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Veículo
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Ano Veículo</th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Combustível</th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Valor
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                        
                        @foreach ($vehicles->items() as $v)
                         
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $v->month  .'/'. $v->year  }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $v->brand}}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $v->exemplar  }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $v->exemplar_year  }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $v->fuel  }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{  'R$ '.number_format($v->value, 2, ',', '.') }}  
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
