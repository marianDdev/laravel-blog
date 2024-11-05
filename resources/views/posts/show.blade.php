<x-guest-layout
    :metaDescription="$metaDescription"
    :metaKeywords="$metaKeywords"
    :metaTitle="$metaTitle"
    :ogImage="$ogImage"
    :ogUrl="$ogUrl"
>
    <main class="bg-white dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-24 h-24 rounded-full"
                                 src="{{ url('images/rightsupplier_logo.png') }}" alt="Marian Dumitru">
                            <div>
                                <a href="https://www.rightsupplier.eu" rel="author"
                                   class="text-xl font-bold text-gray-900 dark:text-white">by RightSupplier</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Your no. 1 hospitality platform</p>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    <time datetime="2022-02-08"
                                          title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                </header>
                <p class="lead">{!! $post->summary !!}</p>
                <p>{!! $post->first_paragraph !!}</p>
                <p>{!! $post->second_paragraph!!}</p>
                <p>{!! $post->third_paragraph !!}</p>

                <div class="w-3/5 h-3/5">
                    <figure>
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                    </figure>
                </div>

                @foreach($post->sections as $section)
                    <h4>{!! $section->title !!}</h4>
                    <p>{!! $section->content !!}</p>
                @endforeach
                @if(!is_null($post->conclusion))
                    <h3>Conclusion</h3>
                    <p>{!! $post->conclusion !!}</p>
                @endif

                {{--                TODO implement comments and display them like this--}}
                {{--                @include('posts._comments')--}}
            </article>
        </div>
    </main>

    {{--                TODO implement related articles|popular r whatever and display them like this--}}
    {{--    @include('posts._related')--}}

    {{--                TODO implement newsletter subscribers and display them like this--}}
    {{--    @include('posts._newsletters')--}}
</x-guest-layout>
