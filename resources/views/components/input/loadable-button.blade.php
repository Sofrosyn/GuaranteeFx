@props(['label'])
<button {{ $attributes->merge(['class' => 'btn', 'type' => 'button']) }} wire:loading.attr="disabled">
  {{ $label }}
</button>
