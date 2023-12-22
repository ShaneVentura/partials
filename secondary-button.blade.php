<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-6 border-2 border-blue-500 rounded-md font-light shadow-sm focus:outline-none transition ease-in-out duration-150 -mr-20 ml-11 focus:ring-2 focus:ring-black-dark-600']) }}>
    {{ $slot }}
</button>
