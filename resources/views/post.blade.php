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

    <div class="mx-auto">
        <main class="py-2 md:py-4">
            <div class="px-6 mx-auto max-w-screen-md lg:max-w-screen-lg">
                <article class="mx-auto w-full max-w-3xl bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    
                    <!-- Back Link -->
                    <a href="/posts" class="inline-block mb-6 text-blue-600 font-medium hover:text-blue-700 transition-colors">
                        &laquo; Back to all posts
                    </a>

                    <!-- Author Info -->
                    <address class="flex items-center gap-4 not-italic mb-8">
                        <img class="w-16 h-16 rounded-full object-cover border border-gray-200 shadow-sm" 
                             src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" 
                             alt="{{ $post->author->name }}">
                        <div>
                            <a href="/posts?author={{ $post->author->username }}" 
                               rel="author" 
                               class="block text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">
                               {{ $post->author->name }}
                            </a>
                            <p class="text-gray-500 text-sm">
                                <time pubdate datetime="{{ $post->created_at }}" title="{{ $post->created_at->format('F j, Y') }}">
                                    {{ $post->created_at?->diffForHumans() }}
                                </time>
                            </p>
                            <a href="/posts?category={{ $post->category->slug }}">
                                <span class="{{ $colorClasses[$post->category->color] ?? 'bg-gray-100 text-gray-700' }} text-xs font-medium inline-flex items-center px-3 py-1 rounded-full mt-1">
                                    {{ $post->category->name }}
                                </span>
                            </a>
                        </div>
                    </address>

                    <!-- Title -->
                    <header class="mb-8">
                        <h1 class="text-4xl font-extrabold leading-tight text-gray-900 mb-4">
                            {{-- Fitur {{ $post->title }} memungkinkan halaman post menampilkan judul dinamis sesuai data dari web.php, sehingga title bisa berbeda (misalnya "Articles by" atau "Articles in") dengan konten artikel dibawahnya yg tetap sama. --}}
                            {{ $post->title }}
                        </h1>
                        <hr class="border-gray-200">
                    </header>

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        {!! nl2br(e($post->body)) !!}
                    </div>

                </article>
            </div>
        </main>
    </div>
</x-layout>

