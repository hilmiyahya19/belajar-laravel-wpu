<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-2xl mx-auto mt-10 space-y-6">
        <h3 class="text-2xl font-semibold text-gray-800 text-center">Ini adalah halaman Contact</h3>

        <div class="bg-white shadow p-6 rounded-lg space-y-4">
            <h2 class="text-xl font-semibold text-gray-800">Contact Us</h2>
            
            <div>
                <h3 class="font-medium text-gray-700">Email:</h3>
                <p>
                    <a href="mailto:info@example.com" class="text-blue-600 hover:underline">
                        info@example.com
                    </a>
                </p>
            </div>

            <div>
                <h3 class="font-medium text-gray-700">Social Media:</h3>
                <ul class="list-disc pl-5 text-blue-600 space-y-1">
                    <li><a href="https://facebook.com/example" class="hover:underline">Facebook</a></li>
                    <li><a href="https://twitter.com/example" class="hover:underline">Twitter</a></li>
                    <li><a href="https://instagram.com/example" class="hover:underline">Instagram</a></li>
                    <li><a href="https://linkedin.com/company/example" class="hover:underline">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
