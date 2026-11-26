
@props([
    'title',
    'value' => 0,
    'description' => null,
    'icon' => null,
])

<div class="card border-0 shadow-sm h-100">
    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-start">

            <div>
                <p class="text-secondary mb-2">
                    {{ $title }}
                </p>

                <h3 class="fw-bold mb-2">
                    {{ $value }}
                </h3>

                @if ($description)
                    <small class="text-secondary">
                        {{ $description }}
                    </small>
                @endif
            </div>

            @if ($icon)
                <div class="rounded-3 bg-primary bg-opacity-10 text-primary p-3">
                    <i class="{{ $icon }}"></i>
                </div>
            @endif

        </div>

    </div>
</div>
