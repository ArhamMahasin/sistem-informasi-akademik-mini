
@props([
    'striped' => true,
    'hover' => true,
    'responsive' => true,
])

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <div @if ($responsive) class="table-responsive" @endif>

            <table {{ $attributes->merge([
                'class' => 'table align-middle mb-0'
                    . ($striped ? ' table-striped' : '')
                    . ($hover ? ' table-hover' : ''),
            ]) }}>

                @if (isset($header))
                    <thead class="table-light">
                        {{ $header }}
                    </thead>
                @endif

                <tbody>
                    {{ $slot }}
                </tbody>

            </table>

        </div>

    </div>
</div>
