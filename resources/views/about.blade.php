<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-3xl bg-white shadow-lg rounded-3xl border border-gray-100 p-10 text-center">
            
            <!-- Foto Profil -->
            <div class="flex justify-center mb-6">
                <img 
                    src="/img/Zephyro.png" 
                    alt="Owner Image" 
                    class="w-40 h-40 rounded-full object-cover shadow-md border-4 border-blue-100 hover:scale-105 transition-transform duration-300"
                >
            </div>

            <!-- Nama & Deskripsi -->
            <h1 class="text-3xl font-bold text-gray-800 mb-2">About Me</h1>
            <p class="text-lg text-gray-600 mb-4">
                Halo! Saya <span class="font-semibold text-blue-600">{{ $nama }}</span>, 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut animi officia placeat corrupti iure expedita adipisci, similique sunt inventore molestiae.
            </p>

            <!-- Garis Pemisah -->
            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full mb-6"></div>

            <!-- Isi Tentang -->
            <p class="text-gray-700 leading-relaxed text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur excepturi dolore eum aliquid beatae praesentium ratione, quis magnam odio commodi? Eligendi quibusdam neque vel laborum inventore dolorum necessitatibus ipsam, quam nisi? Reiciendis qui deleniti tenetur quaerat placeat fugiat delectus laboriosam!
            </p>

            <!-- Footer kecil -->
            <p class="mt-8 text-sm text-gray-500">Thank you for visiting ✨</p>
        </div>
    </section>
</x-layout>
