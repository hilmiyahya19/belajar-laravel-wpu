<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-2xl mx-auto text-center mt-10 space-y-4">
        <h3 class="text-2xl font-semibold text-gray-800">Ini adalah halaman About</h3>
        <h4 class="text-lg text-gray-600">Owner: <span class="font-medium text-gray-800">{{ $nama }}</span></h4>
        
        <div class="flex justify-center">
            <img src="/img/Zephyro.png" alt="Owner Image" class="w-48 rounded-lg shadow-md">
        </div>
    </div>
</x-layout>
