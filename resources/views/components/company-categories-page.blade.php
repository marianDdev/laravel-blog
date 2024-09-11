<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Choose your company type.</h2>
                <h3 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Depending on what category you choose we are offering you a better experience based on your particular needs.</h3>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach($categories as $category)
                    @include('dashboard.ingredients', ['name' => $category, 'imagePath' => 'https://picsum.photos/200'])
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
