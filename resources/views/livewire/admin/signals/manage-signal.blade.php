<div class="card card-body">
    <form wire:submit.prevent="submit">
        <x-input.text name="title" label="Title" wire:model.defer="title"/>
        <x-input.file accept="video/mp4" name="video" wire:model="video" id="video"></x-input.file>
        <x-input.loadable-button class="btn btn-primary" type="submit" label="Save"/>
    </form>
</div>
