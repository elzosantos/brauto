<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            {{ __('Consultorias') }}
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
                                                <td colspan="4"
                                                    class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                    Assinatura do Técnico Responsável:
                                                </td>


                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Data: _________/_________/__________
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
                                                    class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                    Marca:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Modelo:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Versão:
                                                </td>


                                            </tr>
                                            <tr
                                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                    Ano:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Cor:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Cliente:
                                                </td>


                                            </tr>
                                            <tr
                                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                                                    Km Atual:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Placa:
                                                </td>

                                                <td colspan="2"
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    Renavam:
                                                </td>

                                            </tr>
                                            @include('consultancy.partials.group1' )
                                            @include('consultancy.partials.group2' )
                                            @include('consultancy.partials.group3' )
                                            @include('consultancy.partials.group4' )
                                            @include('consultancy.partials.group5' )
                                            @include('consultancy.partials.group6' ) 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex items-center">
                            <form action="{{ route('users.destroy', $consultancy->id) }}" method="POST">
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
