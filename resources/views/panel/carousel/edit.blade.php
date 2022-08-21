<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Imagem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form method="post" action="{{ route('carousel.edit.do') }}" enctype="multipart/form-data">
                @csrf
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="border-b border-gray-200 bg-white p-6 sm:px-20">
                        <div class="flex flex-col lg:mb-4 lg:flex-row lg:gap-10">
                            <div class="basis-8/12" x-data="imageViewerDesktop()">
                                <div class="mb-2">
                                    <template x-if="!imageUrlDesktop">
                                        <label for="dropzone-file-desktop" class="flex h-[300px] w-full cursor-pointer items-center justify-center rounded-lg border-gray-300 bg-gray-50 hover:bg-gray-100">
                                            <img src="{{ asset('storage/carousels/' . $carousel->image_desktop) }}" class="h-[300px] w-full rounded border-2 border-dashed border-gray-300 object-cover">
                                    </template>
                                    <template x-if="imageUrlDesktop">
                                        <label for="dropzone-file-desktop" class="flex h-[300px] w-full cursor-pointer items-center justify-center rounded-lg border-gray-300 bg-gray-50 hover:bg-gray-100">
                                            <img :src="imageUrlDesktop" class="h-[300px] w-full rounded border-2 border-dashed border-gray-300 object-cover">
                                    </template>
                                    <input x-on:change="fileChosenDesktop" id="dropzone-file-desktop" type="file" accept="image/*" class="hidden" name="image_desktop" />
                                    </label>
                                </div>
                            </div>
                            <div class="basis-4/12" x-data="imageViewerMobile()">
                                <div class="mb-2">
                                    <template x-if="!imageUrlMobile">
                                        <label for="dropzone-file-mobile" class="flex h-[300px] w-full cursor-pointer items-center justify-center rounded-lg border-gray-300 bg-gray-50 hover:bg-gray-100">
                                            <img src="{{ asset('storage/carousels/' . $carousel->image_mobile) }}" class="h-[300px] w-full rounded border-2 border-dashed border-gray-300 object-cover">
                                    </template>
                                    <template x-if="imageUrlMobile">
                                        <label for="dropzone-file-mobile" class="flex h-[300px] w-full cursor-pointer items-center justify-center rounded-lg border-gray-300 bg-gray-50 hover:bg-gray-100">
                                            <img :src="imageUrlMobile" class="h-[300px] w-full rounded border-2 border-dashed border-gray-300 object-cover">
                                    </template>
                                    <input x-on:change="fileChosenMobile" id="dropzone-file-mobile" type="file" accept="image/*" class="hidden" name="image_mobile" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-3 md:gap-4">
                            <div class="group relative z-0 mb-2 w-full">
                                <x-jet-label for="title" value="{{ __('Título') }}" />
                                <x-jet-input id="title" class="mt-1 w-full" type="text" name="title" value="{{ $carousel->title }}" required autofocus />
                            </div>
                            <div class="group relative z-0 mb-2 w-full">
                                <x-jet-label for="line" value="{{ __('Piscina') }}" />
                                <select class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="pool_id" required autofocus>
                                    @forelse($pools as $pool)
                                        <option value="{{ $pool->id }}" {!! $carousel->pool_id == $pool->id ? 'selected' : '' !!}>{{ $pool->title }}</option>
                                    @empty
                                        Sem piscinas cadastradas...
                                    @endforelse
                                </select>
                            </div>
                            <div class="group relative z-0 mb-2 w-full">
                                <x-jet-label for="position" value="{{ __('Posição') }}" />
                                <select class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="position" required autofocus>
                                    <option value="1">Início</option>
                                    <option value="2">Meio</option>
                                    <option value="3">Fim</option>
                                </select>
                            </div>
                            <input class="hidden" type="text" name="oldImageNameDesktop" value="{{ $carousel->image_desktop }}" />
                            <input class="hidden" type="text" name="oldImageNameMobile" value="{{ $carousel->image_mobile }}" />
                            <input class="hidden" type="text" name="id" value="{{ $carousel->id }}" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between bg-gray-50 px-4 py-3 text-right shadow sm:px-6">
                        <x-button href="{{ url()->previous() }}">{{ __('Voltar') }}</x-button>
                        <x-jet-button type="submit">{{ __('Confirmar') }}</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<script>
    const imageViewerDesktop = () => {
        return {
            imageUrlDesktop: '',

            fileChosenDesktop(event) {
                this.fileToDataUrlDesktop(event, (src) => (this.imageUrlDesktop = src));
            },

            fileToDataUrlDesktop(event, callback) {
                if (!event.target.files.length) return;

                let file = event.target.files[0],
                    reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = (e) => callback(e.target.result);
            },
        }
    }

    const imageViewerMobile = () => {
        return {
            imageUrlMobile: '',

            fileChosenMobile(event) {
                this.fileToDataUrlMobile(event, (src) => (this.imageUrlMobile = src));
            },

            fileToDataUrlMobile(event, callback) {
                if (!event.target.files.length) return;

                let file = event.target.files[0],
                    reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = (e) => callback(e.target.result);
            },
        }
    }
</script>
