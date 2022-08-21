<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-logo class="h-14 w-auto" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-jet-button>
                    {{ __('Enviar Link de Recuperação') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
