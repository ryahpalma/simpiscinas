<div class="mx-auto px-4 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
    @if ($align == 'left')
        <div class="mb-2 flex w-full flex-col-reverse items-center justify-center gap-6 lg:flex-row lg:gap-12">
            <div class="lg:mb-0 lg:max-w-lg lg:pr-5">
                <div class="mb-6 max-w-xl">
                    <h2 class="font-ubuntu text-pink-accent-800 mb-6 max-w-lg text-center text-2xl font-bold tracking-tight sm:leading-none lg:text-left lg:text-4xl">
                        {{ $type }}<span class="font-script text-blue-accent-800 ml-2 text-6xl md:text-7xl">{{ $title }}</span>
                    </h2>
                    <p class="text-center text-base text-gray-700 md:text-lg lg:text-left">
                        {{ $description }}
                    </p>
                </div>
                <div class="flex items-center justify-center space-x-3 lg:justify-start">
                    {{ $button }}
                </div>
            </div>
            <div class="flex items-center justify-center lg:w-1/2">
                <div class="w-full">
                    {{ $image }}
                </div>
            </div>
        </div>
    @else
        <div class="mb-2 flex w-full flex-col items-center justify-center gap-6 lg:flex-row lg:gap-12">
            <div class="flex items-center justify-center lg:w-1/2">
                <div class="w-full">
                    {{ $image }}
                </div>
            </div>
            <div class="lg:mb-0 lg:max-w-lg lg:pr-5">
                <div class="mb-6 max-w-xl">
                    <h2 class="font-ubuntu text-pink-accent-800 mb-6 max-w-lg text-center text-2xl font-bold tracking-tight sm:leading-none lg:text-left lg:text-4xl">
                        {{ $type }}<span class="font-script text-blue-accent-800 ml-2 text-6xl md:text-7xl">{{ $title }}</span>
                    </h2>
                    <p class="text-center text-base text-gray-700 md:text-lg lg:text-left">
                        {{ $description }}
                    </p>
                </div>
                <div class="flex items-center justify-center space-x-3 lg:justify-start">
                    {{ $button }}
                </div>
            </div>
        </div>
    @endif
</div>
