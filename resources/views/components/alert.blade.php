
@props([
    'type' => 'info',
    'dismissible' => true,
])

@php
    $allowedTypes = ['success', 'danger', 'warning', 'info'];

    $alertType = in_array($type, $allowedTypes, true)
        ? $type
        : 'info';
@endphp

<div
    {{ $attributes->merge([
        'class' => 'alert alert-' . $alertType . ($dismissible ? ' alert-dismissible fade show' : ''),
        'role' => 'alert',
    ]) }}
>
    {{ $slot }}

    @if ($dismissible)
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Tutup"
        ></button>
    @endif
</div>
