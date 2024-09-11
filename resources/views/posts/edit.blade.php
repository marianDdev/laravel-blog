<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Edit post</h2>

            <form action="{{ route('posts.update') }}" class="space-y-8" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div>
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                    <input type="text" name="title"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                           placeholder="John Doe">
                    @include('components.error', ['field' => 'title'])
                </div>
                <div class="sm:col-span-2">
                    <label for="summary"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description (optional)</label>
                    <textarea id="summary" name="summary" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    @include('components.error', ['field' => 'summary'])
                </div>
                <div class="sm:col-span-2">
                    <label for="first_paragraph"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">First Paragraph (optional)</label>
                    <textarea id="first_paragraph" name="first_paragraph" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    @include('components.error', ['field' => 'first_paragraph'])
                </div>
                <div class="sm:col-span-2">
                    <label for="second_paragraph"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Second Paragraph (Optional)</label>
                    <textarea id="second_paragraph" name="second_paragraph" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    @include('components.error', ['field' => 'second_paragraph'])
                </div>
                <div class="sm:col-span-2">
                    <label for="Third_paragraph"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Third Paragraph (Optional)</label>
                    <textarea id="Third_paragraph" name="Third_paragraph" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    @include('components.error', ['field' => 'Third_paragraph'])
                </div>
                <x-primary-button class="ml-4">
                    Save and go to article sections
                </x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>
