@props([
'name' => '', 'id' => $id ?? $name, 'placeholder' => '', 'label', 'value' => '',
'preChecked' => false,
'wrapClass' => 'mb-3', 'onLabel' => 'Yes', 'offLabel' => 'No'
])
<div class="{{ $wrapClass }}">
    @isset($label)
        <label class="form-label">{{ $label }}</label>
        @isset($tip)
            <a tabindex="0" data-bs-toggle="popover" title="Info" data-bs-content="{!! $tip !!}" role="button"
               style="cursor: pointer">
                <i class="fas fa-info-circle"></i>
            </a>
        @endisset
        <br>
    @endisset
    <input {{ $attributes->merge(['class' => 'form-check form-switch', 'switch' => 'primary']) }} type="checkbox"
           {{ $preChecked ? 'checked' : '' }} name="{{ $name }}"
           id="{{ $id }}" placeholder="{{ $placeholder }}">
    <label class="form-label" for="{{ $id }}" data-on-label="{{ $onLabel }}" data-off-label="{{ $offLabel }}"></label>
    @if($name && $errors->has($name))<small class="text-danger">{{ $errors->first($name) }}</small>@endif
</div>
