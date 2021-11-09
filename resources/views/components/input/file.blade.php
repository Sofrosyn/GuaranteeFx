@props(['name' => '', 'id' => $id ?? $name, 'placeholder' => '', 'label', 'value' => '', 'wrapClass' => 'mb-3'])
<div
    x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
    class="{{ $wrapClass }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
        @isset($tip)
            <a tabindex="0" data-bs-toggle="popover" title="Info" data-bs-content="{!! $tip !!}" role="button"
               style="cursor: pointer">
                <i class="fas fa-info-circle"></i>
            </a>
        @endisset
    @endisset
    <input {{ $attributes->merge(['class' => 'form-control']) }}
           id="{{ $id }}" placeholder="{{ $placeholder }}"
           type="file"
           value="{{ old($name, $value) }}">
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
    @if($name && $errors->has($name))<small class="text-danger">{{ $errors->first($name) }}</small>@endif
</div>
