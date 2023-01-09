<div>
    <x-guest-layout>
        <x-jet-authentication-card>
            <div class="text-center">
                <img
                class="w-48 mx-auto"
                src="https://worldvision.pe/photos/shares/NOTICIAS/Logo%20png.png"
                alt="logo"
                />
                <h4 class="pt-2 pb-4 font-sans text-2xl font-medium tracking-wider"> INICIAR SESIÓN</h4>
            </div>

            <x-slot name="logo">

            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Correo Electrónica') }}" />
                    <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                    <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Puesto') }}" />
                    <select id="puesto" name="puesto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ( $puestos as $puesto )
                            <option value="{{ $puesto->name }}">{{ $puesto->name }}</option>
                          @endforeach
                        </select>
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Sede') }}" />
                    <select id="sede" name="sede" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ( $sedes as $sede )
                            <option value="{{ $sede->name }}">{{ $sede->name }}</option>
                          @endforeach
                        </select>
                </div>



                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Ubicación física') }}" />
                    <select id="puesto" name="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ( $areas as $area )
                            <option value="{{ $area->name }}">{{ $area->name }}</option>
                          @endforeach
                        </select>
                </div>

                     <!-- Puestos -->




                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Registrar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>





</div>
