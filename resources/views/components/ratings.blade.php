<div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
        <div class="mb-2 flex flex-col sm:mb-0 sm:text-center">
            <div class="mb-10 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
                <h2 {{ $attributes->merge(['class' => 'uppercase max-w-lg mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto font-bold']) }}>
                    {{ $title }}
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    {{ $description }}
                </p>
            </div>
        </div>
    </div>
    <div class="w-full">
        {{ $images }}
    </div>
    <div class="flex justify-center py-6">
        {{ $button }}
    </div>
</div>
