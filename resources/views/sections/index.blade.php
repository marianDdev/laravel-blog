<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Edit sections of post: {{ $post->title }}</h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach($post->sections as $section)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $section->title }}
                        </h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ substr($section->content, 0, 125) }}...</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('sections.edit', ['id' => $section->id]) }}"
                                   class="p-2 bg-blue-400 rounded text-white text-sm">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
