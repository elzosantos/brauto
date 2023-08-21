<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            {{ __('Meus Veículos') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div>
                            <div class="flex items-center gap-x-3">
                      
                                <span
                                    class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">Registros : 1  
                                </span>
                            </div>
                        </div>
                    
                        <div class="flex items-center mt-4 gap-x-3">
                    
                            <a href="{{ route('vehicles.create')  }}"
                                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                    
                                <span>Adicionar Veículo</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                
                                <div class="overflow-hidden">

                                    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
                                        <thead>

                                            <tr>
                                                <td colspan="6" scope="col"
                                                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    Dados do(s) Veículo(s)
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vehicles as $v)
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Marca :  
                                                    </td>

                                                    <td colspan="4"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Modelo : {{ $v['exemplar']['exemplar'] }}
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Ano : {{ $v['year'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Cor : {{ $v['color'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Proprietário :  {{ $v['user']['name'] }}
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Km Atual : {{ $v['km'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Placa : {{ $v['tag'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Renavam :  {{ $v['renavam'] }}
                                                    </td> 
                                                </tr> 
                                                <tr>

                                                    <td colspan="6"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        <form action="{{ route('vehicles.destroy', $v['id']) }}" method="POST">
                                                            @csrf()
                                                            @method('DELETE')
                                                            <button class="alert" type="submit">Deletar</button>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
