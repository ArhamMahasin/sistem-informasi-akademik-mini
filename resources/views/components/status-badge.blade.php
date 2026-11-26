
@props([
    'status',
])

@php
    $colors = [
        'Aktif' => 'success',
        'Nonaktif' => 'secondary',
        'Cuti' => 'warning',
        'Lulus' => 'primary',
        'Draft' => 'secondary',
        'Disimpan' => 'success',
        'Ganjil' => 'info',
        'Genap' => 'primary',
        'Dibuka' => 'success',
        'Ditutup' => 'danger',
    ];

    $color = $colors[$status] ?? 'secondary';
@endphp

<span class="badge bg-{{ $color }}">
    {{ $status }}
</span>
