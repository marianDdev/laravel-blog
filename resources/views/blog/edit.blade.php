<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Add blog data</h2>

            <form action="{{ route('blog.update') }}" class="space-y-8" method="POST">
                @csrf @method('PATCH')
                <div>
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                    <input type="text" name="title"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                           value="{{ $blog->title }}">
                    @include('components.error', ['field' => 'title'])
                </div>
                <div class="sm:col-span-2">
                    <label for="description"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description (optional)</label>
                    <textarea id="description" name="description" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        {{ $blog->description }}
                    </textarea>
                    @include('components.error', ['field' => 'description'])
                </div>
                <x-primary-button class="ml-4">
                    Save
                </x-primary-button>
            </form>
        </div>
    </section>
</x-app-layout>
