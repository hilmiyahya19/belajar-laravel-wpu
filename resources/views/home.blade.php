<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/img/Zephyro.png" alt="Background Image"
                 class="w-full h-full object-cover opacity-20">
        </div>

        <!-- Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 via-gray-900/50 to-gray-800/70"></div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto flex flex-col items-center md:flex-row justify-between px-6 py-24 space-y-10 md:space-y-0">
            
            <!-- Text Content -->
            <div class="md:w-1/2 space-y-6 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Welcome to <span class="text-gray-300">My Website</span>
                </h1>
                <p class="text-lg text-gray-300">
                    Explore articles, insights, and creative works —  
                    designed to inspire, inform, and innovate.
                </p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="/posts" class="bg-white text-gray-900 font-semibold px-5 py-2 rounded-full hover:bg-gray-200 transition">Explore Blog</a>
                    <a href="/about" class="border border-gray-300 font-semibold px-5 py-2 rounded-full hover:bg-gray-200 hover:text-gray-900 transition">About Me</a>
                </div>
            </div>

            <!-- Empty right side (for visual balance) -->
            <div class="md:w-1/2"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">What You Can Find Here</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition border border-gray-200">
                    <div class="flex justify-center mb-4">
                        <div class="bg-gray-800 text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M12 20l9-5-9-5-9 5 9 5z"/>
                                <path d="M12 12l9-5-9-5-9 5 9 5z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Insightful Articles</h3>
                    <p class="text-gray-600">Read well-crafted posts on technology, design, and creativity.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition border border-gray-200">
                    <div class="flex justify-center mb-4">
                        <div class="bg-gray-800 text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3"/>
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Stay Inspired</h3>
                    <p class="text-gray-600">Find ideas and perspectives that fuel your creativity.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition border border-gray-200">
                    <div class="flex justify-center mb-4">
                        <div class="bg-gray-800 text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M12 20v-6h4v6m-6 0H8v-6h4m-4-6l4-4 4 4"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Grow Together</h3>
                    <p class="text-gray-600">Connect with others and grow through shared knowledge.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="bg-gray-900 text-center text-white py-12">
        <h3 class="text-2xl font-semibold mb-3">Ready to explore more?</h3>
        <a href="/contact" class="bg-white text-gray-900 font-semibold px-6 py-2 rounded-full hover:bg-gray-200 transition">
            Get in Touch
        </a>
    </section>
</x-layout>
