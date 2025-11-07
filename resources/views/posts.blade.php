@php
$colorClasses = [
    'red' => 'bg-red-100 text-red-700',
    'green' => 'bg-green-100 text-green-700',
    'blue' => 'bg-blue-100 text-blue-700',
    'yellow' => 'bg-yellow-100 text-yellow-700',
];
@endphp

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mt-4 md:mt-6 py-2 md:py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
        <form>
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
            <div class="relative w-full">
            <label for="search" class="hidden mb-2 text-sm font-medium text-gray-700">Search</label>
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input
                class="block p-3 pl-10 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-blue-400 focus:border-blue-400 placeholder-gray-400"
                placeholder="Search for articles"
                type="search"
                id="search"
                name="search"
                autocomplete="off"
            />
            </div>
            <div>
            <button
                type="submit"
                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-600 border-blue-600 sm:rounded-none sm:rounded-r-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition"
            >
                Search
            </button>
            </div>
        </div>
        </form>
    </div>
    </div>

    <div class="px-4 sm:px-6 md:px-8">
        <div class="max-w-screen-lg mx-auto">
            {{ $posts->links() }}
        </div>
    </div>

    <div class="my-4 py-2 md:py-4 px-4 mx-auto max-w-screen-xl">

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <article class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-between items-center mb-4 text-gray-500">
                        <a href="/posts?category={{ $post->category->slug }}">
                            <span class="{{ $colorClasses[$post->category->color] ?? 'bg-gray-100 text-gray-700' }} text-xs font-medium inline-flex items-center px-3 py-1 rounded-full">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <a href="/posts/{{ $post->slug }}" class="group">
                        <h2 class="mb-3 text-2xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200">
                            {{ $post->title }}
                        </h2>
                    </a>

                    <p class="mb-6 text-gray-600 leading-relaxed">
                        {{ Str::limit($post['body'], 150) }}
                    </p>

                    <div class="flex justify-between items-center">
                        <a href="/posts?author={{ $post->author->username }}" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                            <img class="w-8 h-8 rounded-full object-cover" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                            <span class="font-medium text-gray-800">{{ $post->author->name }}</span>
                        </a>

                        <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-700 transition-colors">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center min-h-[50vh] text-center space-y-4">
                    <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-700">No Articles Found</h2>
                    <p class="text-gray-500">It seems there are no articles matching your search.</p>
                    
                    <a href="/posts"
                        class="inline-block mt-4 px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition-all duration-200">
                        &laquo; Back to All Posts
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <div class="px-4 sm:px-6 md:px-8 pb-6">
        <div class="max-w-screen-lg mx-auto">
            {{ $posts->links() }}
        </div>
    </div>

</x-layout>
