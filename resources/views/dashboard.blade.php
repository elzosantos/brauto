 

<x-app-layout>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Seja bem vindo(a), ' . Auth::user()->name . '!') }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Deseja adicionar um veículo?') }}
                    <p> <a href="{{ route('vehicles.create') }}"><u>Clique aqui!</u></a></p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Deseja adicionar uma consultoria?') }}
                    <p> <a href="{{ route('consultancies.create',0)}}"><u>Clique aqui!</u></a></p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Realize o seu primeiro registro do histórico do seu veículo.') }}
                    <p> <a href=""><u>Clique aqui!</u></a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
