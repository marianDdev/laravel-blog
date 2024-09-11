<div class="flex items-center md:order-2">
    <button type="button"
            class="flex mr-3 text-sm md:mr-0"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        @if($isUserAuthenticated)
            @if($user->getMedia('profile_pictures')->count() > 0)
                <div class="text-center">
                    <img
                        src="{{ $user->getFirstMediaUrl('profile_pictures') }}"
                        class="mx-auto mb-4 w-16 h-16 rounded-full"
                        alt="Avatar" />
                    <h5 class="mb-2 text-sm font-medium leading-tight">{{ $user->getFullName() }}</h5>
                </div>
            @else
                <div
                    class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-red-300 rounded-full dark:bg-gray-600">
                    <span class="text-xl font-bold text-gray-600 dark:text-gray-300">{{ $initials }}</span>
                </div>
            @endif
        @else
            <img
                src="{{ url('/avatar.png') }}"
                class="mx-auto mb-4 w-16 h-16 rounded-full"
                alt="Avatar" />
        @endif
    </button>
    <!-- Dropdown menu -->
    @include('components.dropdown-menu')
    @include('components.mobile-dropdown-menu')
</div>
