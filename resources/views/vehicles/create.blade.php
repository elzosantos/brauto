<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicione um Veículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('vehicles.store') }}">
                        @csrf


                        <div>

                            <x-text-input id="user_id" type="hidden" name="user_id" :value="Auth::user()->id" />

                            <x-input-label for="brand_id" :value="__('Marca')" />

                            <select id="brand_id" name="brand_id" data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="1">Fiat</option>
                                <option value="26">Hyundai</option>
                                <option value="25">Honda</option>
                                <option value="4">Volkswagen</option>
                                <option value="5">Ford</option>

                            </select>
                            <x-input-error :messages="$errors->get('brand_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="exemplar_id" :value="__('Modelo')" />
                            <select  id="exemplar_id" name="exemplar_id" data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="5071">i30</option>
                                <option value="2">Ix35</option>
                                <option value="3">Sonata</option>
                                <option value="4">Veracruz</option>

                            </select>
                            <x-input-error <x-input-error :messages="$errors->get('exemplar_id')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="year" :value="__('Ano')" />
                            <select id="year" name="year" data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>

                            </select>
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="color" :value="__('Cor')" />
                            <select  id="color" name="color" data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="Branco">Branco</option>
                                <option value="Preto">Preto</option>
                                <option value="Prata">Prata</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Azul">Azul</option>

                            </select>
                            <x-input-error :messages="$errors->get('color')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tag" :value="__('Placa')" />
                            <x-text-input id="tag" class="block mt-1 w-full" type="text" name="tag"
                                :value="old('tag')" required autocomplete="tag" />
                            <x-input-error :messages="$errors->get('tag')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="renavam" :value="__('Renavam')" />
                            <x-text-input id="renavam" class="block mt-1 w-full" type="text" name="renavam"
                                :value="old('renavam')" required autocomplete="renavam" />
                            <x-input-error :messages="$errors->get('renavam')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="km" :value="__('Km Atual')" />
                            <x-text-input id="km" class="block mt-1 w-full" type="text" name="km"
                                :value="old('km')" required autocomplete="km" />
                            <x-input-error :messages="$errors->get('renakmvam')" class="mt-2" />
                        </div>

                        <!-- Password -->


                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ml-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
