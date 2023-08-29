<x-app-layout>
    @include('consultancy.header', compact('stepId'))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Name -->
                    @switch($stepId)
                        @case(1)
                            @include('consultancy.partials.group1')
                        @break

                        @case(2)
                            @include('consultancy.partials.group2', compact('idConsult'))
                        @break

                        @case(3)
                            @include('consultancy.partials.group3', compact('idConsult'))
                        @break

                        @case(4)
                            @include('consultancy.partials.group4', compact('idConsult'))
                        @break

                        @case(5)
                            @include('consultancy.partials.group5', compact('idConsult'))
                        @break

                        @case(6)
                            @include('consultancy.partials.group6', compact('idConsult'))
                        @break

                        @case(7)
                            @include('consultancy.partials.group7', compact('idConsult'))
                        @break
                        @case(8)
                            @include('consultancy.partials.group8', compact('idConsult'))
                        @break
                    @endswitch

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
