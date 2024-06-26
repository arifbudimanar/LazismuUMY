<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lokasi') }}
        </h2>
    </x-slot>

    <div class="sm:py-7">
        <div class="max-w-full mx-auto sm:px-6 sm:space-y-6">
            <x-card.app>
                <div class="flex">
                    <x-card.title>
                        {{ __('All Users') }}
                    </x-card.title>
                    <div class="ml-auto">
                        <x-button.link-primary href="{{ route('lokasi.create') }}">
                            {{ __('Create') }}
                        </x-button.link-primary>
                    </div>
                </div>
                @if (request('search') || request('role') || request('verified_account'))
                    <x-card.description>
                        {{ __('Filter for') }}
                        @if (request('search'))
                            <span class="font-semibold">{{ request('search') }}</span>
                        @endif
                        @if (request('role'))
                            {{ __('role') }} <span class="font-semibold">{{ request('role') }}</span>
                        @endif
                        @if (request('verified_account'))
                            {{ __('status') }} <span class="font-semibold">
                                @if (request('verified_account') == 'true')
                                    {{ __('verified') }}
                                @else
                                    {{ __('not verified') }}
                                @endif
                            </span>
                        @endif
                    </x-card.description>
                @else
                    <x-card.description>
                        {{ __('Manage all user, search by name or email.') }}
                    </x-card.description>
                @endif
                @if ($errors->any())
                    <div>
                        <ul class="mt-3 text-sm text-red-600 list-none dark:text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="w-full mt-6">
                    <form class="flex flex-col justify-between gap-2 lg:flex-row">
                        <x-text-input id="search" name="search" type="text" class="w-full lg:w-1/3"
                            placeholder="{{ __('Search here') }}" value="{{ request('search') }}" autofocus />
                        <div class="flex items-center justify-between gap-2">
                            <div class="">
                                <x-select-input id="role" name="role" class="">
                                    <option value="">{{ __('Select Role') }}</option>
                                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>
                                        {{ __('Admin') }}
                                    </option>
                                    <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>
                                        {{ __('User') }}
                                    </option>
                                </x-select-input>
                                <x-select-input id="verified_account" name="verified_account" class="">
                                    <option value="">{{ __('Select Status') }}</option>
                                    <option value="true"
                                        {{ request('verified_account') == 'true' ? 'selected' : '' }}>
                                        {{ __('Verified') }}
                                    </option>
                                    <option value="false"
                                        {{ request('verified_account') == 'false' ? 'selected' : '' }}>
                                        {{ __('Not Verified') }}
                                    </option>
                                </x-select-input>
                            </div>
                            <div class="">
                                <x-button.secondary type="submit">
                                    {{ __('Apply') }}
                                </x-button.secondary>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- @include('admin.users.partials.list') --}}
                @include('lokasi.partials.table')

                {{-- Pagination --}}
                {{-- @if ($lokasis->hasPages()) --}}
                <div class="mt-6">
                    {{-- The default pagination view is pagination.custom-tailwind blade component.
                    You can change the default pagination view using the AppServiceProvider
                    or by passing the pagination view as parameter to the links method. --}}
                    {{ $lokasis->links() }}
                    {{-- {{ $users->links('vendor.pagination.tailwind') }} --}}
                    {{-- {{ $users->links('vendor.pagination.simple-tailwind') }} --}}
                    {{-- {{ $users->links('vendor.pagination.custom-tailwind') }} --}}
                </div>
                {{-- @endif --}}
            </x-card.app>
        </div>
    </div>
</x-app-layout>
