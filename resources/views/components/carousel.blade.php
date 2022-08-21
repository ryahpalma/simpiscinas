<div {{ $attributes->merge(['class' => 'glide']) }}>
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            {{ $images }}
        </ul>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
        <button type="button" class="group absolute top-0 left-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-glide-dir="<">
            <span class="group-focus:ring-pink-accent-800 border-4 inline-flex h-12 w-12 items-center justify-center rounded-full bg-pink-accent-800 group-hover:bg-pink-accent-800/70 group-focus:outline-none group-focus:ring-4 sm:h-14 sm:w-14">
                <svg aria-hidden="true" class="text-white h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Anterior</span>
            </span>
        </button>
        <button type="button" class="group absolute top-0 right-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-glide-dir=">">
            <span class="group-focus:ring-pink-accent-800 inline-flex h-12 w-12 items-center justify-center rounded-full border-4 bg-pink-accent-800 group-hover:bg-pink-accent-800/70 group-focus:outline-none group-focus:ring-4 sm:h-14 sm:w-14">
                <svg aria-hidden="true" class="text-white h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Próximo</span>
            </span>
        </button>
    </div>
</div>
