<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Contact Section -->
    <section class="min-h-screen bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white flex items-center justify-center px-4 py-20">
        <div class="max-w-3xl w-full bg-white/10 backdrop-blur-md rounded-2xl shadow-2xl p-10 border border-gray-700">
            
            <!-- Title -->
            <h2 class="text-3xl font-bold text-center mb-6">
                Get in <span class="text-blue-400">Touch</span>
            </h2>
            <p class="text-center text-gray-300 mb-10">
                Have questions, ideas, or collaborations in mind? I’d be glad to hear from you.
            </p>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-200">
                
                <!-- Email -->
                <div class="bg-gray-800/60 p-6 rounded-xl border border-gray-700 hover:bg-gray-800 transition">
                    <h3 class="text-xl font-semibold mb-2">Email</h3>
                    <p>
                        <a href="mailto:info@example.com" class="text-blue-400 hover:underline">
                            info@example.com
                        </a>
                    </p>
                </div>

                <!-- Social Media -->
                <div class="bg-gray-800/60 p-6 rounded-xl border border-gray-700 hover:bg-gray-800 transition">
                    <h3 class="text-xl font-semibold mb-3">Social Media</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://facebook.com/example" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0022 12z"/>
                                </svg>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/example" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.27 4.27 0 001.88-2.36 8.34 8.34 0 01-2.68 1.03A4.19 4.19 0 0016.11 4a4.21 4.21 0 00-4.21 4.21c0 .33.04.65.11.96A11.9 11.9 0 013 5.16a4.22 4.22 0 001.3 5.62 4.19 4.19 0 01-1.91-.53v.05a4.22 4.22 0 003.38 4.13 4.25 4.25 0 01-1.9.07 4.22 4.22 0 003.94 2.93A8.44 8.44 0 012 19.54 11.86 11.86 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68v-.53A8.3 8.3 0 0022.46 6z"/>
                                </svg>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/example" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.6 0 3 1.4 3 3v10c0 1.6-1.4 3-3 3H7c-1.6 0-3-1.4-3-3V7c0-1.6 1.4-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-2.8a.8.8 0 100 1.6.8.8 0 000-1.6z"/>
                                </svg>
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/company/example" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3A2 2 0 0121 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zM8 18v-7H5v7h3zm-1.5-8.3a1.7 1.7 0 110-3.4 1.7 1.7 0 010 3.4zm12.5 8.3v-4.3c0-2.3-1.2-3.4-2.8-3.4-1.3 0-2 .7-2.3 1.3v-1.1h-3v7.5h3v-4.1c0-1 .2-2 1.5-2s1.6 1 1.6 2.1V18h3z"/>
                                </svg>
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Message -->
            <div class="text-center mt-12">
                <p class="text-gray-400">Thank you for visiting ✨</p>
            </div>
        </div>
    </section>
</x-layout>
