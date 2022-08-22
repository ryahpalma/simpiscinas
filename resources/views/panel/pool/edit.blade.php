<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Piscina') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form method="post" action="{{ route('pool.edit.do') }}" enctype="multipart/form-data">
                @csrf
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="border-b border-gray-200 bg-white p-6 sm:px-20">
                        <div class="flex flex-col items-center justify-between gap-x-12 lg:flex-row">
                            <div class="basis-7/12">
                                <div class="grid md:grid-cols-3 md:gap-4">
                                    <div class="group relative z-0 mb-2 w-full">
                                        <x-jet-label for="title" value="{{ __('Título') }}" />
                                        <x-jet-input id="title" class="mt-1 w-full" type="text" name="title" value="{{ $pool->title }}" required autofocus />
                                    </div>
                                    <div class="group relative z-0 mb-2 w-full">
                                        <x-jet-label for="line" value="{{ __('Linha') }}" />
                                        <select class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="line">
                                            <option selected value="{{ $pool->line }}">{{ $pool->line }}</option>
                                            <option disabled>------</option>
                                            <option value="Confort">Confort</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Praia">Praia</option>
                                            <option value="Retangular">Retangular</option>
                                            <option value="Spa">Spa</option>
                                            <option value="Personalize">Personalize</option>
                                        </select>
                                    </div>
                                    <div class="group relative z-0 mb-2 w-full">
                                        <x-jet-label for="model" value="{{ __('Modelo') }}" />
                                        <x-jet-input id="model" class="mt-1 w-full" type="text" name="model" value="{{ $pool->model }}" required autofocus />
                                    </div>
                                </div>
                                <x-jet-label for="description" value="{{ __('Descrição') }}" />
                                <textarea class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" id="description" cols="30" rows="5" value="{{ str_replace('<br />', '', $pool->description) }}">{{ str_replace('<br />', '', $pool->description) }}</textarea>
                                <div class="py-6">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                                <div class="mt-4 grid md:grid-cols-2 md:gap-4">
                                    <div class="group relative z-0 mb-4 w-full">
                                        <x-jet-label for="measurement" value="{{ __('Medidas C x L x P') }}" />
                                        <x-jet-input x-data="" x-mask="99.99m x 9.99m x 9.99m" class="mt-1 w-full" type="text" name="measurement" value="{{ $pool->measurement }}" required autofocus />
                                    </div>
                                    <div class="group relative z-0 mb-4 w-full">
                                        <x-jet-label for="measurement_price" value="{{ __('Preço') }}" />
                                        <x-jet-input x-data="" x-mask:dynamic="$money($input, ',')" class="mt-1 w-full" type="text" name="measurement_price" value="{{ $pool->measurement_price }}" required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div x-data="imageViewer()">
                                <div class="mb-2 py-12 lg:py-0">
                                    <div class="flex w-full items-center justify-center">
                                        <template x-if="!imageUrl">
                                            <label for="dropzone-file" class="flex h-[200px] w-[300px] cursor-pointer items-center justify-center rounded-lg md:h-[300px] md:w-[400px]">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{ asset('storage/pools/' . $pool->image) }}" class="w-full rounded border-2 border-dashed border-gray-300 object-cover md:h-[300px]">
                                                </div>
                                        </template>
                                        <template x-if="imageUrl">
                                            <label for="dropzone-file" class="flex h-[200px] w-[300px] cursor-pointer items-center justify-center rounded-lg md:h-[300px] md:w-[400px]">
                                                <div class="flex items-center justify-center">
                                                    <img :src="imageUrl" class="w-full rounded border-2 border-dashed border-gray-300 object-cover md:h-[300px]">
                                                </div>
                                        </template>
                                        <input x-on:change="fileChosen" id="dropzone-file" type="file" accept="image/*" class="hidden" name="image" />
                                        </label>
                                    </div>
                                    <input class="hidden" type="text" name="oldImageName" value="{{ $pool->image }}" />
                                    <input class="hidden" type="text" name="id" value="{{ $pool->id }}" />
                                </div>
                            </div>
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
    const imageViewer = () => {
        return {
            imageUrl: '',

            fileChosen(event) {
                this.fileToDataUrl(event, (src) => (this.imageUrl = src));
            },

            fileToDataUrl(event, callback) {
                if (!event.target.files.length) return;

                let file = event.target.files[0],
                    reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = (e) => callback(e.target.result);
            },
        }
    }
</script>
