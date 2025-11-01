<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-3xl mx-auto mt-10 space-y-6">

        @foreach ($posts as $post)
        <article class="bg-white shadow p-6 rounded-lg space-y-2">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-xl font-semibold text-gray-800">{{ $post['title'] }}</h2>
            </a>
            <div>
                <a href="#">{{ $post['author'] }}</a> 1 November 2025
            </div>
            <p class="text-gray-600">
                {{ Str::limit($post['body'], 200) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
        @endforeach

    </div>
</x-layout>
