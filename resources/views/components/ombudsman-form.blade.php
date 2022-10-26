<form action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="mb-2 flex flex-col sm:mb-0 sm:text-center">
                <div class="mb-7 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
                    <h2 class="mb-6 max-w-lg font-sans text-3xl font-bold uppercase leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        {{ $title }}
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        {{ $description }}
                    </p>
                </div>
            </div>
        </div>
        <p class="mb-2 text-sm text-red-400">Os campos com asterisco ( * ) precisam ser preenchidos.</p>
        <div class="grid md:grid-cols-2 md:gap-4">
            <div class="group relative z-0 mb-2 w-full">
                <x-jet-input id="name" class="mt-1 w-full" type="text" name="name" placeholder="Nome do Contratante*" required />
            </div>
            <div class="group relative z-0 mb-2 w-full">
                <x-jet-input id="email" class="mt-1 w-full" type="email" name="email" placeholder="Email" />
            </div>
            <div class="group relative z-0 mb-2 w-full">
                <x-jet-input id="phone" class="mt-1 w-full" type="number" name="phone" placeholder="Telefone*" required />
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="group relative z-0 mb-2">
                    <select class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="state">
                        <option selected>Estado*</option>
                        <option value="Acre">AC</option>
                        <option value="Alagoas">AL</option>
                        <option value="Amazonas">AM</option>
                        <option value="Amapá">AP</option>
                        <option value="Bahia">BA</option>
                        <option value="Ceará">CE</option>
                        <option value="Distrito Federal">DF</option>
                        <option value="Espirito Santo">ES</option>
                        <option value="Goias">GO</option>
                        <option value="Maranhão">MA</option>
                        <option value="Minas Gerais">MG</option>
                        <option value="Mato Grosso do Sul">MS</option>
                        <option value="Mato Grosso">MT</option>
                        <option value="Pará">PA</option>
                        <option value="Paraíba">PB</option>
                        <option value="Pernambuco">PE</option>
                        <option value="Piauí">PI</option>
                        <option value="Paraná">PR</option>
                        <option value="Rio de Janeiro">RJ</option>
                        <option value="Rio Grande do Norte">RN</option>
                        <option value="Rondônia">RO</option>
                        <option value="Roraima">RR</option>
                        <option value="Rio Grande do Sul">RS</option>
                        <option value="Santa Catarina">SC</option>
                        <option value="Sergipe">SE</option>
                        <option value="São Paulo">SP</option>
                        <option value="Tocantins">TO</option>
                    </select>
                </div>
                <div class="group relative z-0 mb-2 w-full">
                    <x-jet-input id="city" class="mt-1 w-full" type="text" name="city" placeholder="Cidade*" required />
                </div>
            </div>
        </div>
        <textarea class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 md:mt-4" name="message" id="message" cols="30" rows="4" placeholder="Mensagem" maxlength="500"></textarea>
        <label for="contract" class="mb-2 inline-block text-gray-600">Foto do Contrato*</label>
        <input class="m-0 block w-full rounded-md border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 shadow-sm transition ease-in-out focus:border-blue-600 focus:bg-white focus:text-gray-700 focus:outline-none" accept="application/pdf,image/*" type="file" name="contract" required>
        <div class="flex justify-center pt-8">
            {{ $action }}
        </div>
    </div>
</form>
