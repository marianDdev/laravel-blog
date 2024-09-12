<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('footer.company') }}</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="{{ route('about') }}" class=" hover:underline">{{ __('footer.about') }}</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">{{ __('footer.careers') }}</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">{{ __('footer.brand_center') }}</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">{{ __('footer.blog') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('footer.social') }}</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">Linkedin</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a role="link" aria-disabled="true" class="hover:underline">Instagram</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('footer.legal') }}</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="{{ route('terms.conditions') }}" class="hover:underline">{{ __('footer.terms_conditions') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('privacy') }}" class="hover:underline">{{ __('footer.privacy_policy') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('cookie') }}" class="hover:underline">{{ __('footer.cookie_policy') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('advertising') }}" class="hover:underline">{{ __('footer.advertising_policy') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('copyright') }}" class="hover:underline">{{ __('footer.copyright_policy') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('branding') }}" class="hover:underline">{{ __('footer.brand_policy') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('general.policies') }}" class="hover:underline">{{ __('footer.general_policies') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('footer.help_center') }}</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="{{ route('contact.index') }}" class="hover:underline">{{ __('footer.contact') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('how_it_works.sellers') }}" class="hover:underline"
                           target="_blank">{{ __('footer.how_it_works_suppliers') }}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('how_it_works.buyers') }}" class="hover:underline"
                           target="_blank">{{ __('footer.how_it_works_owners') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        @include('layouts._low_footer')
    </div>
</footer>
