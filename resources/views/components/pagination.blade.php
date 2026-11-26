
@props([
    'paginator',
])

@if ($paginator->hasPages())
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-3">

        <small class="text-secondary">
            Menampilkan
            {{ $paginator->firstItem() ?? 0 }}
            sampai
            {{ $paginator->lastItem() ?? 0 }}
            dari
            {{ $paginator->total() }}
            data
        </small>

        <div>
            {{ $paginator->links() }}
        </div>

    </div>
@endif
