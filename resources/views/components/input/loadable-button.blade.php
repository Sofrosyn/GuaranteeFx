@props(['label'])
<button {{ $attributes->merge(['class' => 'btn', 'type' => 'button']) }} wire:loading.attr="disabled">
  <span wire:loading.remove>{{ $label }}</span>
    <span wire:loading>Loading...</span>
</button>
