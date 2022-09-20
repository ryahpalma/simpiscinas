<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de Avaliações') }}
        </h2>
    </x-slot>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12" x-data="manageRates()">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-end bg-gray-50 px-4 py-3 text-right shadow sm:px-6">
                    <form id="formContent" method="post" enctype="multipart/form-data">
                        <label for="uploadButton">
                            <x-button class="cursor-pointer">{{ __('Enviar Imagens') }}</x-button>
                        </label>
                        <input x-on:change="uploadFile" id="uploadButton" type="file" accept="image/*" class="hidden" name="images[]" multiple />
                    </form>
                </div>
                <div class="border-b border-gray-200 bg-white p-6 sm:px-20">
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-4 lg:grid-cols-5">
                        @foreach ($images as $image)
                            <div class="relative w-full">
                                <img class="h-auto w-full rounded-md border bg-gray-100" src="{{ asset('storage/' . $image) }}">
                                <div x-on:click="deleteFile($event)" data-path="{{ $image }}" class="delete-button absolute top-0 right-0 m-2 cursor-pointer rounded-md border border-gray-400 bg-black py-0 px-2 text-white hover:bg-gray-700">X</div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const manageRates = () => {
            return {
                uploadFile() {
                    const url = "{{ route('rate.create.do') }}";
                    const images = new FormData(document.getElementById("formContent"));

                    fetch(url, {
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            method: 'post',
                            credentials: "same-origin",
                            body: images
                        })
                        .then((data) => {
                            location.reload();
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },
                deleteFile(event) {
                    const url = "{{ route('rate.delete.do') }}";
                    const data = event.target.dataset.path;

                    fetch(url, {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            method: 'post',
                            credentials: "same-origin",
                            body: JSON.stringify({
                                path: data
                            })
                        })
                        .then((data) => {
                            event.target.parentNode.remove();
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            }
        }
    </script>
</x-app-layout>
