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
                                <input class="hidden" type="text" name="id" value="{{ $pool->id }}">
                            </div>
                            <div x-data="manageViewer()">
                                <div class="mb-2 py-12 lg:py-0">
                                    <div class="items-left flex w-full flex-col justify-center">
                                        <label for="dropzone-file" class="flex h-[200px] w-[300px] cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 md:h-[200px] md:w-[600px] lg:w-[400px]">
                                            <div class="flex flex-col items-center justify-center">
                                                <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                </svg>
                                                <p class="mb-2 p-5 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Clique para enviar</span> a imagem</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (Tamanho: 799x800px)</p>
                                            </div>
                                            <input x-on:click="resetPreview($event)" x-on:change="previewImage($event)" id="dropzone-file" type="file" accept="image/*" class="hidden" name="images[]" multiple />
                                        </label>
                                        <input class="hidden" type="text" name="oldImagesName" value="{{ $pool->images }}">
                                        <div id="preview" class="mt-4 grid grid-cols-3 justify-center gap-1">
                                            @foreach (explode(',', $pool->images) as $image)
                                                <img class="image-preview h-28 w-28 rounded border border-gray-300 object-cover p-1" src="{{ asset('pools/' . $image) }}">
                                            @endforeach
                                        </div>
                                    </div>
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
    const manageViewer = () => {
        return {
            previewImage(event) {
                let files = event.target.files;
                const preview = document.getElementById("preview");

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    let picReader = new FileReader();
                    picReader.addEventListener("load", function(event) {
                        let picFile = event.target;
                        let img = document.createElement("img");

                        img.classList.add("image-preview", "h-28", "w-28", "rounded", "border", "border-gray-300", "object-cover", "p-1");
                        img.src = picFile.result;
                        preview.appendChild(img);
                    });
                    picReader.readAsDataURL(file);
                }
            },
            resetPreview(event) {
                let images = document.querySelectorAll('.image-preview');

                if (images.length > 0) {
                    images.forEach(image => {
                        image.remove();
                    });
                }
            }
        }
    }
</script>
