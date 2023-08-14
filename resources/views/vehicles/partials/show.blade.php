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

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                
                                <div class="overflow-hidden">

                                    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">

                                        <tbody>


                                            <tr>
                                                <td colspan="6" scope="col"
                                                    class="text-center border-b px-6 py-4  transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    Dados do(s) Veículo(s)
                                                </td>
                                            </tr>
                                            @foreach ($vehicles as $v)
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Marca: {{ $v['brand']['name'] }}
                                                    </td>

                                                    <td colspan="4"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Modelo: {{ $v['exemplar']['exemplar'] }}
                                                    </td>

                                                  


                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Ano: {{ $v['year'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Cor: {{ $v['color'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Proprietário: {{ $v['user']['name'] }}
                                                    </td>


                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                        Km Atual:{{ $v['km'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Placa: {{ $v['tag'] }}
                                                    </td>

                                                    <td colspan="2"
                                                        class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                        Renavam: {{ $v['renavam'] }}
                                                    </td>

                                                </tr>
                                               
                                            @endforeach


                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex items-center">
                            <form action="{{ route('users.destroy', 1) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <button class="alert" type="submit">Deletar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
