<ul class="py-2" aria-labelledby="user-menu-button">
    <li>
{{--        <a href="{{ $user->hasRole('admin') ? route('admin.index') : route('home') }}"--}}
{{--           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">--}}
{{--            Dashboard--}}
{{--        </a>--}}
    </li>
{{--    <li>--}}
{{--        <a href="{{ route('settings.index') }}"--}}
{{--           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">--}}
{{--            {{ __('menu.settings') }}--}}
{{--        </a>--}}
{{--    </li>--}}
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </li>
</ul>
