<x-guest-layout>
    <div class="container h-full px-6 py-40 ">
        <div class="flex flex-wrap items-center justify-center h-full text-gray-800">
            <div class="xl:w-10/12">
                <div class="block bg-white rounded-lg shadow-2xl">
                    <div class="lg:flex lg:flex-wrap g-0">
                        <div class="px-4 lg:w-6/12 md:px-0">
                            <div class="md:p-12 md:mx-6">
                                <div class="text-center">
                                    <img
                                        class="w-48 mx-auto"
                                        src="https://lh5.googleusercontent.com/AjZKoaq8xH-WuMvqMmWFEPrnooor3u7cdq_4Tvj77Q986ShYbJIoSsvixcplA1MWDKuI0hN06BsAhHE4RTgMgth0w4AcEXI3pMLnqqLNn1cHp8XNs1hZMAPnYgAPVVq3rIqNMJD23LjWW80B0R1dTw"
                                        alt="logo"
                                    />
                                    <h4 class="pb-1 mt-1 mt-20 mb-12 font-sans text-2xl font-medium tracking-wider"> INICIAR SESIÓN</h4>
                                </div>

                                <x-slot name="logo">
                                    <a href="/">
                                        <x-jet-authentication-card-logo class="w-20 h-20 text-gray-500 fill-current"/>
                                    </a>
                                </x-slot>

                                @if (session('status'))
                                <div class="mb-4 ">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end pb-6 mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif

                                        <x-jet-button class="ml-4">
                                            {{ __('Ingresar') }}
                                        </x-jet-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <div
                                class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                                style=" background: linear-gradient(to right,#ee7724, #f46256,#ffa666,#ffc399);" >
                                <div class="px-4 py-6 text-white md:p-12 md:mx-6">
                                    <h3 class="mb-6 text-2xl font-semibold ">WORLD VISION PERÚ </h3>
                                    <p class="text-sm">
                                        Organización cristiana de ayuda humanitaria, desarrollo y promoción
                                        de la justicia, dedicada a trabajar con niños, niñas, familias y
                                        comunidades para reducir la pobreza e injusticia. World Vision
                                        sirve a todas las personas, sin distinción de raza, religión,
                                        grupo étnico o género.
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
