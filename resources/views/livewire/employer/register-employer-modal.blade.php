<div>
    <div class="modal fade" id="{{ $modalId }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <form class="modal-content" wire:submit.prevent="submit">
                <div class="modal-header">
                    <h5 class="modal-title">Create an account to get started.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">
                        Please <a href="{{ route('login') }}">login here</a> if you already have an account.
                    </p>
                    <x-input.text label="Company Name" name="company_name" wire:model.defer="company_name"/>

                    <x-input.text label="Email" name="email" wire:model.defer="email"/>

                    <x-input.text label="Password" name="password" wire:model.defer="password" type="password"/>
                </div>
                <div class="modal-footer">
                    <p class="text-muted">
                        By creating an account, you agree to our <a href="#/">Terms of Service</a> ,
                        <a href="#/">Cookie Policy</a> and <a href="#/">Privacy Policy</a> .
                    </p>
                    <x-input.loadable-button class="btn btn-primary" type="submit" label="Continue"/>
                </div>
            </form>
        </div>
    </div>

</div>
