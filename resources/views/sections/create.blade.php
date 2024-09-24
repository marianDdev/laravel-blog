<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Add Sections</h2>
            <form action="{{ route('sections.store') }}" class="space-y-8" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                @for ($i = 0; $i < 10; $i++)
                    <div>
                        <label for="sections[{{ $i }}][title]"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title for Section #{{ $i + 1}}</label>
                        <input type="text" name="sections[{{ $i }}][title]"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               placeholder="Enter title">
                        @include('components.error', ['field' => "sections[{{ $i }}][title]"])
                    </div>
                    <div class="sm:col-span-2">
                        <label for="sections[{{ $i }}][content]"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Content for Section #{{ $i + 1}}</label>
                        <textarea id="sections[{{ $i }}][content]" name="sections[{{ $i }}][content]" rows="6"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        @include('components.error', ['field' => "sections[{{ $i }}][content]"])
                    </div>

                    <hr class="mb-10">
                @endfor
                <x-primary-button class="ml-4">
                    Save and go to conclusion
                </x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>

