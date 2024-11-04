<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Program') }}
        </h2>
    </x-slot>

    <div class="sm:py-7">
        <div class="max-w-full mx-auto sm:px-6 sm:space-y-6">
            <x-card.app>
                <div class="flex">
                    <x-card.title>
                        {{ __('Semua daftar Program') }}
                    </x-card.title>
                    <div class="ml-auto">
                        <x-button.link-primary href="{{ route('programpilar.create') }}">
                            {{ __('Create') }}
                        </x-button.link-primary>
                    </div>
                </div>
                @if (request('search') || request('pilar'))
                    <x-card.description>
                        {{ __('Filter for') }}
                        @if (request('search'))
                            <span class="font-semibold">{{ request('search') }}</span>
                        @endif
                        @if (request('pilar'))
                            {{ __('pilar') }} <span class="font-semibold">{{ request('pilar') }}</span>
                        @endif
                        {{-- @if (request('verified_account'))
                            {{ __('status') }} <span class="font-semibold">
                                @if (request('verified_account') == 'true')
                                    {{ __('verified') }}
                                @else
                                    {{ __('not verified') }}
                                @endif
                            </span>
                        @endif --}}
                    </x-card.description>
                @else
                    <x-card.description>
                        {{ __('Mengatur Seluruh Daftar Program.') }}
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

                {{-- @include('admin.users.partials.list') --}}
                @include('programpilar.partials.table')

                {{-- Pagination --}}
                {{-- @if ($programpilars->hasPages()) --}}
                <div class="mt-6">
                    {{-- The default pagination view is pagination.custom-tailwind blade component.
                    You can change the default pagination view using the AppServiceProvider
                    or by passing the pagination view as parameter to the links method. --}}
                    {{ $programPilars->links() }}
                    {{-- {{ $users->links('vendor.pagination.tailwind') }} --}}
                    {{-- {{ $users->links('vendor.pagination.simple-tailwind') }} --}}
                    {{-- {{ $users->links('vendor.pagination.custom-tailwind') }} --}}
                </div>
                {{-- @endif --}}
            </x-card.app>
        </div>
    </div>
</x-app-layout>
