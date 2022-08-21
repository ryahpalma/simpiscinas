<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-logo class="h-14 w-auto" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Confirme sua senha, isso irá garantir sua segurança.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="mt-4 flex justify-end">
                <x-jet-button class="ml-4">
                    {{ __('Confirmar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
