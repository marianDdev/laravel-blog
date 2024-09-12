<div class="flex bg-white">
    <div class="md:flex w-2/5 md:w-1/4 h-screen bg-white border-r hidden">
        <div class="mx-auto py-10">
            @include('layouts.logo')
            <ul>
                <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 2h8a2 2 0 012 2v16a2 2 0 01-2 2H8a2 2 0 01-2-2V4a2 2 0 012-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 6h8M8 10h8M8 14h6" />
                    </svg>

                    <a href="{{ route('admin.posts') }}">
                        <span class="font-semibold">Posts</span>
                    </a>
                </li>
                <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                    <a href="{{ route('blog.edit', ['id' => 1]) }}">
                        <span class="font-semibold">Edit blog title & description</span>
                    </a>
                </li>
                <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <a href="#">
                        <span class="font-semibold">Admins</span>
                    </a>
                </li>
                <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <span class="font-semibold">Settings</span>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="button" class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="min-h-screen w-full bg-white border-l">
        @include('layouts.authenticated_nav')
        {{ $slot }}
    </div>
</div>
