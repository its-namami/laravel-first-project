@props(['type' => 'a', 'active' => false])

@php
    $navLink = fn() => $active ? <<<ACTIVE
        bg-gray-900 text-white
    ACTIVE : <<<INACTIVE
        text-gray-300 hover:bg-white/5 hover:text-white
    INACTIVE;

    $type = $type === 'button' ? 'button" ' : 'a';
@endphp

@if ($type === 'a')
    <a class="{{ $navLink() }}" {{$attributes}}>
        {{ $slot }}
    </a >
@else
    <button class="{{ $navLink() }}" {{$attributes}}>
        {{ $slot }}
    </button >
@endif
