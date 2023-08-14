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
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Marca')" />
                           
                                <select data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                    <option value="0">Selecione</option>
                                    <option value="1">Fiat</option>
                                    <option value="2">Hyundai</option>
                                    <option value="3">Honda</option>
                                    <option value="4">Volkswagen</option>
                                    <option value="5">Ford</option>
                                   
                                  </select>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Modelo')" />
                            <select data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="1">i30</option>
                                <option value="2">Ix35</option>
                                <option value="3">Sonata</option>
                                <option value="4">Veracruz</option> 
                               
                              </select>
                        <x-input-error 
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Ano')" />
                            <select data-te-select-init class="block mt-1 w-full dark:bg-gray-800">
                                <option value="0">Selecione</option>
                                <option value="1">2009</option>
                                <option value="2">2010</option>
                                <option value="3">2011</option>
                                <option value="4">2012</option> 
                               
                              </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Cor')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Placa')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Renavam')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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

 

    
