<a {{ $attributes->merge(['class' => 'inline-flex justify-center items-center px-4 py-2 bg-blue-accent-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-accent-700 active:bg-blue-accent-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>
