<div>
    <x-2col>
        <x-slot name="left">
            <h3>{{ __('Change Password') }}</h3>
            <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
            <p>
                {{ __('Use a password manager, we recommend using 1Password for creating and storing passwords or Google Authenticator') }}
            </p>
        </x-slot>
        <x-slot name="right">

            <div class="card">
                @include('errors.messages')
                <x-form wire:submit="update" method="put">

                    <div class="alert alert-info">
                        <p class="text-white">{{ __('New password must be at least 8 characters in length') }}<br>
                            {{ __('at least one lowercase letter') }}<br>
                            {{ __('at least one uppercase letter') }}<br>
                            {{ __('at least one digit') }}</p>
                    </div>

                    <x-form.input wire:model="newPassword" type="password" :label="__('New Password')" name='newPassword' />
                    <x-form.input wire:model="confirmPassword" type="password" :label="__('Confirm Password')"
                        name='confirmPassword' />

                    <x-button>{{ __('Change Password') }}</x-button>

                </x-form>
            </div>

        </x-slot>
    </x-2col>
</div>
