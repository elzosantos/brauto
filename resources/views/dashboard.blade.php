 

<x-app-layout>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Seja bem vindo(a), ' . Auth::user()->name . '!') }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Você ainda não possui nenhum veículo cadastrado. Deseja adicionar algum?') }}
                    <p> <a href=""><u>Clique aqui!</u></a></p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Você ainda não realizou nenhuma consultoria. Deseja adicionar alguma?') }}
                    <p> <a href=""><u>Clique aqui!</u></a></p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Realize o seu primeiro registro do histórico do seu veículo.') }}
                    <p> <a href=""><u>Clique aqui!</u></a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
