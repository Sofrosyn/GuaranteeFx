@props(['text', 'title'])
<a tabindex="0" data-bs-toggle="popover" title="{{ $title }}" data-bs-content="{!! $text !!}" role="button"
   style="cursor: pointer">
    <i class="fas fa-info-circle"></i>
</a>
