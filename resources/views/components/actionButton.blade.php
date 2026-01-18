@props(['href', 'type' => 'primary'])

@php
    $theme = match($type) {
        'view' => 'btn-info text-white',
        'edit' => 'btn-warning',
        'delete' => 'btn-danger',
        default => 'btn-primary',
    };
@endphp

<a href="{{ $href }}" class="btn btn-sm {{ $theme }}">
    {{ $slot }}
</a>