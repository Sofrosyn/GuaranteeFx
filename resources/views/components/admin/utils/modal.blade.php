@props(['title' => '', 'size' => null, 'id'])
<div
    {{ $attributes->merge(['class' => 'modal fade', 'tabindex' => '-1', 'style' => 'display: none', 'id' => $id]) }}
>
    <div class="modal-dialog {{ $size ?? 'modal-lg' }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $content ?? '' }}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
