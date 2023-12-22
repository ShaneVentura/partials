@props(['value'])

<label {{ $attributes->merge(['class' => 'font-openSans text-black-light opacity-90 font-medium text-xl tracking-tight ']) }}>
    {{ $value ?? $slot }}
</label>
