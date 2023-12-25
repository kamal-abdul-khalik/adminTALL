<div>
    <div class="card">
        @include('errors.errors')
        <h3>{{ __('Login Logo') }}</h3>

        <x-form wire:submit="update" method="put">

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>

                    <h4>{{ __('Light Mode Logo') }}</h4>

                    <div
                        class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div class="flex text-sm text-center text-gray-600">
                                <label for="loginLogo"
                                    class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>{{ __('Upload a file') }}</span>
                                    <input wire:model="loginLogo" id="loginLogo" name="loginLogo" type="file"
                                        class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">{{ __('PNG, JPG, GIF') }}</p>
                        </div>
                    </div>

                    <div class="bg-dark">
                        @if ($loginLogo)
                            <p>{{ __('Photo Preview') }}:</p>
                            <p><img src="{{ $loginLogo->temporaryUrl() }}"></p>
                        @elseif(storage_exists($existingLoginLogo))
                            <p><img src="{{ storage_url($existingLoginLogo) }}"></p>
                        @endif
                    </div>

                </div>

                <div>
                    <h4>Dark Mode Logo</h4>

                    <div
                        class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div class="flex text-sm text-center text-gray-600">
                                <label for="loginLogoDark"
                                    class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>{{ __('Upload a file') }}</span>
                                    <input wire:model="loginLogoDark" id="loginLogoDark" name="loginLogoDark"
                                        type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">{{ __('PNG, JPG, GIF') }}</p>
                        </div>
                    </div>

                    <div class="bg-dark">
                        @if ($loginLogoDark)
                            <p>{{ __('Photo Preview') }}:</p>
                            <p><img src="{{ $loginLogoDark->temporaryUrl() }}"></p>
                        @elseif(storage_exists($existingLoginLogoDark))
                            <p><img src="{{ storage_url($existingLoginLogoDark) }}"></p>
                        @endif
                    </div>

                </div>
            </div>

            <x-button class="mt-3 btn-primary btn-sm">{{ __('Save') }}</x-button>

        </x-form>
    </div>
</div>
