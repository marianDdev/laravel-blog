<ul class="py-2" aria-labelledby="user-menu-button">
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </li>
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin())
        <li>
            <x-dropdown-link :href="route('admin.posts')">
                Dashboard
            </x-dropdown-link>
        </li>
    @endif
</ul>

