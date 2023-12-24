<div>
    <x-2col>
        <x-slot name="left">
            <h3>{{ __('Admin Settings') }}</h3>
        </x-slot>
        <x-slot name="right">
            <div class="card">

                <x-form wire:submit="update" method="put">

                    <fieldset>

                        <div
                            class="mt-1 -space-y-px bg-white rounded-md shadow-sm dark:bg-slate-700 dark:text-slate-200">

                            <div class="relative flex p-4 rounded-tl-md rounded-tr-md">
                                <div class="flex items-center h-5">
                                    <input wire:model="isOfficeLoginOnly" id="isOfficeLoginOnly" type="checkbox"
                                        class="w-4 h-4 cursor-pointer border-slate-300 text-light-blue-600 focus:ring-light-blue-500"
                                        checked="">
                                </div>
                                <label for="isOfficeLoginOnly" class="flex flex-col ml-3 cursor-pointer">
                                    <span class="block text-sm font-medium text-slate-900 dark:text-slate-300">
                                        {{ __('Office Login Only') }}
                                    </span>
                                    <span class="block text-sm text-slate-500 dark:text-slate-200">
                                        {{ __('When active user can only login at pre-approved IP addresses set in') }}
                                        <a href="{{ route('admin.settings') }}">{{ __('System Settings') }}</a>.
                                    </span>
                                </label>
                            </div>

                            @if ($user->id !== auth()->id())
                                <div class="relative flex p-4 rounded-tl-md rounded-tr-md">
                                    <div class="flex items-center h-5">
                                        <input wire:model="isActive" id="isActive" type="checkbox"
                                            class="w-4 h-4 border-gray-300 cursor-pointer text-light-blue-600 focus:ring-light-blue-500"
                                            checked="">
                                    </div>
                                    <label for="isActive" class="flex flex-col ml-3 cursor-pointer">
                                        <span class="block text-sm font-medium text-gray-900 dark:text-gray-300">
                                            {{ __('Account Active') }}
                                        </span>
                                        <span class="block text-sm text-gray-500 dark:text-gray-200">
                                            {{ __('Only active users can login') }}.
                                        </span>
                                    </label>
                                </div>
                            @endif

                        </div>
                    </fieldset>

                    <x-button class="mt-5">{{ __('Update Settings') }}</x-button>

                    @include('errors.messages')

                </x-form>
            </div>

        </x-slot>
    </x-2col>
</div>
