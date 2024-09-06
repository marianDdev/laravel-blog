// title
// summary
// first, second and third paragraph

// redirect to create section
//the first seaction create page should have 10 different title - content pairs for 10 sections
// and then add sections one by one redirecting from one to another if needed more than 10
// if less than 10 needed leave the rest of them empty
// every section create view should have 2 buttons "create and add another section" and "submit and go to conclusion"
// consclusion should update the post with conclusion

<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Add product</h2>

            <form action="{{ route('sections.store') }}" class="space-y-8" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                @foreach([range(1, 10)] as $i)
                    <div>
                        <label for="sections[{{ $i }}][title]"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                        <input type="text" name="sections[{{ $i }}][title]"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               placeholder="John Doe">
                        @include('components.error', ['field' => "sections[{{ $i }}][title]"])
                    </div>
                    <div class="sm:col-span-2">
                        <label for="sections[{{ $i }}][content]"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Content</label>
                        <textarea id="sections[{{ $i }}][content]" name="sections[{{ $i }}][content]" rows="6"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        @include('components.error', ['field' => "sections[{{ $i }}][content]"])
                    </div>
                @endforeach
                <x-primary-button class="ml-4">
                    Save and go to conclusion
                </x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>
