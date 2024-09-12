@php
    use App\Models\User;

    if(\Illuminate\Support\Facades\Auth::check()) {

        /** @var User $user */
        $user     = \Illuminate\Support\Facades\Auth::user();
    }
@endphp

<div
    class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
    id="user-dropdown">
    @if(Auth::check())
        <div class="px-4 py-3">
            <span class="block text-sm font-bold text-gray-900">{{ $user->getFullName() }}</span>
        </div>
    @endif
    @if(Auth::check())
        @include('components.authenticated-dropdown-list')
    @else
        @include('components.guest-dropdown-list')
    @endif
</div>
