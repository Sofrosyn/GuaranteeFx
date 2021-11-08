@props(['name' => '', 'id' => $id ?? $name, 'placeholder' => '', 'label', 'value' => '', 'wrapClass' => 'mb-3', 'info'])
<div class="{{ $wrapClass }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
        @if(isset($tip))
            <a tabindex="0" data-bs-toggle="popover" title="Info" data-bs-content="{!! $tip !!}" role="button"
               style="cursor: pointer">
                <i class="fas fa-info-circle"></i>
            </a>
        @elseif(isset($info))<span class="text-muted">{!! $info !!}</span>@endif
    @endisset
    <div class="input-group" id="datepicker-{{ $id }}">
        <input id="{{ $id }}"
            {{ $attributes->merge(['class' => 'form-control']) }}
            type="text" class="form-control" placeholder="dd-mm-yyyy"
               data-date-format="yyyy-mm-dd" data-date-container='#datepicker-{{ $id }}' data-provide="datepicker"
               data-date-autoclose="true" data-date-start-date="{{ now()->toDateString() }}">

        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
    </div>
    @if($name && $errors->has($name))<small class="text-danger">{{ $errors->first($name) }}</small>@endif
</div>
