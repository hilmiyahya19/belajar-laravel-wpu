<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-3xl mx-auto mt-10 space-y-6">

        <article class="bg-white shadow p-6 rounded-lg space-y-2">
            <h2 class="text-xl font-semibold text-gray-800">{{ $post['title'] }}</h2>
            <div>
                <a href="#">{{ $post['author'] }}</a> 1 November 2025
            </div>
            <p class="text-gray-600">
                {{ $post['body'] }}
            </p>
            <a href="/posts" class="text-blue-500 hover:underline">&laquo; Back to posts</a>
        </article>

    </div>
</x-layout>
