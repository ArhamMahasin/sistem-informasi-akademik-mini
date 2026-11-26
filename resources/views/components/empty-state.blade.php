
@props([
    'title' => 'Belum Ada Data',
    'description' => 'Data belum tersedia.',
    'icon' => 'bi bi-inbox',
])

<div class="text-center py-5">

    <div class="mb-3">
        <i
            class="{{ $icon }} text-secondary"
            style="font-size: 3rem;"
        ></i>
    </div>

    <h5 class="fw-semibold mb-2">
        {{ $title }}
    </h5>

    <p class="text-secondary mb-0">
        {{ $description }}
    </p>

    @if (isset($actions))
        <div class="mt-3">
            {{ $actions }}
        </div>
    @endif

</div>
