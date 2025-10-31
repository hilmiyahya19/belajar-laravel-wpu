<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-3xl mx-auto mt-10 space-y-6">
        <h3 class="text-2xl font-semibold text-gray-800 text-center">Ini adalah halaman Blog</h3>

        <article class="bg-white shadow p-6 rounded-lg space-y-2">
            <h2 class="text-xl font-semibold text-gray-800">Getting Started with Laravel</h2>
            <p class="text-gray-600">
                Laravel is a PHP web application framework with expressive, elegant syntax. We believe
                development must be an enjoyable and creative experience to be truly fulfilling. Laravel
                attempts to take the pain out of development by easing common tasks used in most web projects.
            </p>
        </article>

        <article class="bg-white shadow p-6 rounded-lg space-y-2">
            <h2 class="text-xl font-semibold text-gray-800">Blade Templating Engine</h2>
            <p class="text-gray-600">
                Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP
                templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all
                Blade views are compiled into plain PHP code and cached until they are modified.
            </p>
        </article>
    </div>
</x-layout>
