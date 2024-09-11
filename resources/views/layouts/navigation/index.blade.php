<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        @include('layouts.logo')
        @include('components.user-menu')
        @include('components.navigation-list')
{{--        @include('users.forms.upload_profile_image_modal')--}}
    </div>
{{--    <div class="w-1/4 items-center mx-auto">--}}
{{--        @include('search.search-bar')--}}
{{--    </div>--}}
</nav>
