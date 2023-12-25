<div>
    <div class="card">
        @include('errors.messages')
        <h4>{{ __('Office lockdown by IP Address') }}</h4>

        <div class="p-2 text-gray-100 rounded bg-primary">
            {{ __("When a user is set to office login only the IP's listed below will allow access.") }}
            {{ __('If you are not in the office you will not be able to login.') }}
        </div>

        <div class="flex items-center justify-between my-3">
            <span>{{ __('Your current IP address is') }} {{ request()->ip() }}</span>
            <div><x-button class="mt-3 btn-info btn-sm" wire:click='add'>{{ __('Add IP') }}</x-button></div>
        </div>

        <x-form wire:submit="update" method="put">

            <table>
                <thead>
                    <tr>
                        <th>{{ __('IP Address') }}</th>
                        <th>{{ __('Comment') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ips as $index => $row)
                        @error("ips.$index.ip")
                            <tr>
                                <td colspan="3">
                                    <span class="error">{{ $message }}</span>
                                </td>
                            </tr>
                        @enderror
                        <tr>
                            <td>
                                <x-form.input wire:model="ips.{{ $index }}.ip" label="none">
                                    {{ $row['ip'] }}
                                </x-form.input>
                            </td>
                            <td>
                                <x-form.input wire:model="ips.{{ $index }}.comment" label="none">
                                    {{ $row['comment'] }}
                                </x-form.input>
                            </td>
                            <td class="flex">
                                <button type="button" wire:click="remove({{ $index }})" class="error">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <x-button class="mt-3 btn-primary btn-sm">{{ __('Save') }}</x-button>

        </x-form>
    </div>
</div>
