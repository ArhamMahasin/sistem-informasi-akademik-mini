
@props([
    'title',
    'description' => null,
])

<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

    <div>
        <h4 class="fw-bold mb-1">
            {{ $title }}
        </h4>

        @if ($description)
            <p class="text-secondary mb-0">
                {{ $description }}
            </p>
        @endif
    </div>

    @if (isset($actions))
        <div class="d-flex flex-wrap gap-2">
            {{ $actions }}
        </div>
    @endif

</div>
