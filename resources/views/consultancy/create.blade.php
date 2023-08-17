<x-app-layout>

    <x-slot name="header">
        <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 py-3">
            @if ($stepId == 0)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif
            1
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight"> Apresentação </h3>

            </span>
            </li>
            @if ($stepId == 1)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 2
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight">Historico e Dados</h3>

            </span>
            </li>
            @if ($stepId == 2)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 3
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight">Análise Exterior</h3>

            </span>
            </li>
            @if ($stepId == 3)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 4
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight">Análise Interior</h3>
            </span>
            </li>

            @if ($stepId == 4)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 5
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight">Análise Mecânica</h3>
            </span>
            </li>
            @if ($stepId == 5)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 6
            </span>
            <span>
                <h3 class="pl-3  text-sm leading-tight">Análise Mecânica B</h3>
            </span>
            </li>
            @if ($stepId == 6)
                <li class="pl-3 flex items-center text-blue-600 dark:text-blue-500  space-x-2.5 px-2">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    @else
                <li class="pl-3 flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                    <span
                        class="flex items-center justify-center w-8 h-8 border border-gray-500  rounded-full shrink-0 dark:border-gray-400">
            @endif 7
            </span>
            <span>
                <h3 class="pl-3 text-sm leading-tight">Mecânica Preventiva</h3>
            </span>
            </li>
        </ol>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                        <!-- Name -->
                        @switch($stepId)
                            @case(0)
                                @include('consultancy.partials.group0')
                            @break

                            @case(1)
                                @include('consultancy.partials.group1')
                            @break

                            @case(2)
                                @include('consultancy.partials.group2')
                            @break

                            @case(3)
                                @include('consultancy.partials.group3')
                            @break

                            @case(4)
                                @include('consultancy.partials.group4')
                            @break

                            @case(5)
                                @include('consultancy.partials.group5')
                            @break

                            @case(6)
                                @include('consultancy.partials.group6')
                            @break
                        @endswitch
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
