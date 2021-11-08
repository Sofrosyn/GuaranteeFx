<div class="card card-body">
    <form wire:submit.prevent="submit">
        <x-input.text name="title" label="Title" wire:model.defer="title"/>
        <div class="my-2">
            <label class="form-label" id="video">Signal Video</label>
            <input type="file" id="video" class="form-control" accept="video/mp4" name="video" wire:model="video">
            @error('video')<small class="text-danger">{{ $message }}</small>@enderror
        </div>
        <x-input.loadable-button class="btn btn-primary" type="submit" label="Save"/>
    </form>
</div>
