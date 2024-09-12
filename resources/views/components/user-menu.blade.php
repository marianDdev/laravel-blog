<div class="flex items-center md:order-2">
    <button type="button"
            class="flex mr-3 text-sm md:mr-0"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <div
            class="relative inline-flex items-center justify-center w-16 h-16 overflow-hidden bg-red-300 rounded-full dark:bg-gray-600">
            <span class="text-xl font-bold text-gray-600 dark:text-gray-300">MD</span>
        </div>
    </button>
    @include('components.dropdown-menu')
    @include('components.mobile-dropdown-menu')
</div>
