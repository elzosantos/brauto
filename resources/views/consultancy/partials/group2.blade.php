<form method="POST" action="{{ route('consultancies.store') }}">
    @csrf

    <table class="min-w-full border  text-sm font-light dark:border-neutral-500">
        <thead class="border-b font- dark:border-neutral-500 text-center">
            <tr>
                <th colspan="6" scope="col" class="border-r px-6 py-4 dark:border-neutral-500 text-xl">
                    GRUPO 2 - ANÁLISE EXTERIOR
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
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Número de chassi no documento:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Número de motor no documento:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Documento de rodagem:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Recibo de compra e venda / ATPV:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Documento de rodagem:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Manuais:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Chave principal:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Chave reserva:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Documento de rodagem:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Placa e lacre:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
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
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Débitos (Multas e Impostos):

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Alienação:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Propriedade:
                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Contrato social / Inventário:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap border-r font-medium dark:border-neutral-500">
                    Licenciamento:

                </td>
                <td colspan="2" class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Conferência física:
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                    Aprovado
                </td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                    Reprovado
                </td>

            </tr>
            <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td colspan="6" class=" row-span-4 whitespace-nowrap border-r font-medium dark:border-neutral-500">
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
