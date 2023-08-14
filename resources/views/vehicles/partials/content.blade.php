<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Marca
                            </th>

                            <th scope="col"
                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Modelo
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Ano
                            </th>

                         
                                <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Placa</th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($vehicles->items() as $vehicle)
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $vehicle->brand['name'] }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $vehicle->exemplar['exemplar'] }}
                                </td>
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $vehicle->year }}
                                </td>
                              
                                <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                    {{ $vehicle->tag }}
                                </td>

                                <td class="px-4 py-2 text-sm whitespace-nowrap flex">

                                    <a href="{{ route('consultancies.show', $vehicle->id) }}"
                                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white  rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                        <span>Detalhar</span>
                                    </a>

                                    <a href="{{ route('supports.edit', $vehicle->id) }}"
                                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white  rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                        <span>Editar</span>
                                    </a>
                                    <form action="{{ route('users.destroy', $vehicle->id) }}" method="POST">
                                        @csrf()
                                        @method('DELETE')
                                        <button
                                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white  rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700"
                                            type="submit">Deletar</button>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
