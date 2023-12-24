<div>
    <p class="mb-5">
        <a wire:navigate href="{{ route('admin.settings.roles.index') }}">{{ __('Roles') }}</a>
        <span class="dark:text-gray-200">- {{ __('Edit Role') }}</span>
    </p>

    <div class="float-right mx-6 my-3">
        <span class="error">*</span>
        <span class="dark:text-gray-200"> = {{ __('required') }}</span>
    </div>

    <div class="clearfix"></div>

    <x-form wire:submit="update" method="put">

        <div class="row">

            <div class="card">
                <div class="md:w-1/2">
                    @if ($role->name === 'admin')
                        <x-form.input wire:model="label" :label="__('Role')" name='label' disabled />
                    @else
                        <x-form.input wire:model="label" :label="__('Role')" name='label' required />
                    @endif
                </div>
            </div>

        </div>

        @if ($role->name !== 'admin')
            <div class="max-w-screen-md mx-auto">
                @foreach ($modules as $module)
                    <h3 class="mt-4 ">{{ $module }}</h3>
                    <div class="relative overflow-x-auto rounded-lg shadow-md">
                        <table>
                            <thead>
                                <tr>
                                    <th class="dark:text-gray-300">{{ __('Permission') }}</th>
                                    <th class="dark:text-gray-300">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\Permission::where('module', $module)->orderby('name')->get() as $perm)
                                    <tr>
                                        <td>{{ $perm->label }}</td>
                                        <td><input type="checkbox" wire:model="permissions" value="{{ $perm->name }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex justify-between my-6">
            <div></div>
            <x-form.submit>{{ __('Update Role') }}</x-form.submit>
        </div>

    </x-form>

</div>
