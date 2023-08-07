<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Novo Usuario') }}
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
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('CPF')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Senha')" />
                
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmação de Senha')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div style="padding: 2%">
                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ __('Informações complementares') }}
                            </h3>
                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Telefone Celular')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Telefone Comercial')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Genero')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('CEP')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Pais')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Cidade')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Bairro')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Endereço')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cpf" :value="__('Numero')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                required autofocus autocomplete="cpf" />
                            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                
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

 

    


<!--

@ c srf()
<input type="text" placeholder="Assunto" name="subject" value="{ { $support->subject ?? old('subject') }}"
    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
<textarea name="body" cols="30" rows="5" placeholder="Descrição"
    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{ $support->body ?? old('body') }}</textarea>
<button type="submit"
    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
-->



