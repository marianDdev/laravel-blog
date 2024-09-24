<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <a href="{{ route('posts.create') }}" class="p-10 m-10 bg-green-500 rounded-full py-1.5 text-white">
            Create new post
        </a>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $blog->title }}</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $blog->description }}</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach($posts as $post)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ substr($post->summary, 0, 125) }}...</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('posts.edit', ['id' => $post->id]) }}"
                                   class="p-2 bg-blue-400 rounded text-white text-sm">
                                    Edit title, paragraphs & conclusion
                                </a>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('sections.index', ['postId' => $post->id]) }}"
                                   class="p-2 bg-blue-400 rounded text-white text-sm">
                                    Edit sections
                                </a>
                            </div>
                            <a href="{{ route('admin.posts.show', ['slug' => $post->slug]) }}"
                               class="inline-flex items-center font-medium text-[#20C997] dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
