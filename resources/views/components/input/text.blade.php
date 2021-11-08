@props(['name' => '', 'id' => $id ?? $name, 'placeholder' => '', 'label', 'value' => '', 'wrapClass' => 'mb-3'])
<div class="{{ $wrapClass }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
        @isset($tip)
            <a tabindex="0" data-bs-toggle="popover" title="Info" data-bs-content="{!! $tip !!}" role="button"
               style="cursor: pointer">
                <i class="fas fa-info-circle"></i>
            </a>
        @endisset
    @endisset
    <input {{ $attributes->merge(['class' => 'form-control', 'type' => 'text']) }}
           id="{{ $id }}" placeholder="{{ $placeholder }}"
           value="{{ old($name, $value) }}">
    @if($name && $errors->has($name))<small class="text-danger">{{ $errors->first($name) }}</small>@endif
</div>
