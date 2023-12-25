<div>
    <div class="card">
        @include('errors.messages')

        <h3 class="mb-4">{{ __('Application Settings') }}</h3>

        <x-form wire:submit="update" method="put">

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

                <x-form.input wire:model="siteName" name="siteName" :label="__('Site Name')" />

                <fieldset>

                    <div class="mt-1 -space-y-px bg-white rounded-md shadow-sm dark:bg-slate-800 dark:text-slate-200">

                        <div class="relative flex p-4 border rounded-md dark:border-gray-700">
                            <div class="flex items-center h-5">
                                <input wire:model="isForced2Fa" id="isForced2Fa" type="checkbox"
                                    class="w-4 h-4 border-gray-300 cursor-pointer text-light-blue-600 focus:ring-light-blue-500">
                            </div>
                            <label for="isOfficeLoginOnly" class="flex flex-col ml-3 cursor-pointer">
                                <span class="block text-sm font-medium text-gray-900 dark:text-gray-300">
                                    {{ __('Enforce 2Fa') }}
                                </span>
                                <span class="block text-sm text-gray-500 dark:text-gray-200">
                                    {{ __('Force 2 factor authentication for all users on login.') }}
                                    {{ __('Users can only login at pre-approved IP addresses.') }}
                                </span>
                            </label>
                        </div>

                    </div>
                </fieldset>

            </div>

            <x-button class="mt-3 btn-primary btn-sm">{{ __('Update Application Settings') }}</x-button>

        </x-form>
    </div>
</div>
