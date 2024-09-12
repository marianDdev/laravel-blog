<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Ad conclusion for post {{ $post->title }}</h2>

            <form action="{{ route('posts.store_conclusion') }}" class="space-y-8" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div class="sm:col-span-2">
                    <label for="conclusion"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description (optional)</label>
                    <textarea id="conclusion" name="conclusion" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    @include('components.error', ['field' => 'conclusion'])
                </div>
                <x-primary-button class="ml-4">
                    Save conclusion
                </x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>
