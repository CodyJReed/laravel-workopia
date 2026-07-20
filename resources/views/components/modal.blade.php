@props(['buttonText' => ''])

<div x-data="{ open: false }" class="my-5">
    <button @click="open = true"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
        {{ $buttonText }}
    </button>
    <div x-cloak class="fixed inset-0 flex items-center justify-center bg-gray-900/50" x-show="open">
        <div @click.away="open = false" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            {{ $slot }}
        </div>
    </div>
</div>
