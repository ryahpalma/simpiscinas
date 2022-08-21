@php
switch ($color) {
    case 'blue':
        $colorClass = 'bg-blue-accent-800 text-white';
        break;
    case 'pink':
        $colorClass = 'bg-pink-accent-800 text-white';
        break;
    case 'white':
        $colorClass = 'bg-gray-50 text-gray-900';
        break;
    default:
        $colorClass = 'bg-gray-800 text-white';
        break;
}
@endphp

<div class="{{ $colorClass }}">
    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="mb-2 flex w-full flex-col items-center justify-center gap-12 lg:flex-row">

            @if ($align == 'left')
                <div class="mb-8 lg:mb-0 lg:max-w-lg lg:pr-5 text-center lg:text-left">
                    <div class="mb-6 max-w-xl">
                        <h2 class="mb-6 lg:max-w-lg font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">
                            {{ $title }}
                        </h2>
                        <p class="font-medium text-base md:text-lg">
                            {{ $description }}
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 justify-center lg:justify-start">
                        {{ $button }}
                    </div>
                </div>
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="w-full">
                        {{ $image }}
                    </div>
                </div>
            @else
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="w-full">
                        {{ $image }}
                    </div>
                </div>
                <div class="mb-8 lg:mb-0 lg:max-w-lg lg:pr-5 text-center lg:text-left">
                    <div class="mb-6 max-w-xl">
                        <h2 class="mb-6 max-w-lg font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">
                            {{ $title }}
                        </h2>
                        <p class="font-medium text-base md:text-lg">
                            {{ $description }}
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 justify-center lg:justify-start">
                        {{ $button }}
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
