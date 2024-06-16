@props(['value'])

<label {{ $attributes->merge(['class' => 'inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80']) }}>
    {{ $value ?? $slot }}
</label>