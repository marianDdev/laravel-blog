<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-200">
        @include('layouts.logo')

        @if(\Illuminate\Support\Facades\Auth::check())
            @include('search.search-bar')
        @endif

        @include('components.user-menu')
        @include('components.navigation-list')
        @include('users.forms.upload_profile_image_modal')
        @include('companies.forms.upload_logo_modal')
    </div>
</nav>
