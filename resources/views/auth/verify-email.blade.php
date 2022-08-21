<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-logo class="h-14 w-auto" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Antes de continuar, você pode verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de lhe enviar outro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido nas configurações do seu perfil.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar Email de Verificação') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
                <a href="{{ route('profile.show') }}" class="text-sm text-gray-600 underline hover:text-gray-900">
                    {{ __('Editar Perfil') }}
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="ml-2 text-sm text-gray-600 underline hover:text-gray-900">
                        {{ __('Sair') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
