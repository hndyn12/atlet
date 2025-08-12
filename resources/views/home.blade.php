<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->
    <div class="text-white" style="background: linear-gradient(135deg, #dd1515 0%, #d4a0a0 100%);">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">Atlet Berprestasi
                    Indonesia
                </h1>
                <p class="mt-6 text-xl max-w-3xl mx-auto">Temukan profil lengkap atlet-atlet terbaik Indonesia dari
                    berbagai cabang olahraga dan prestasi mereka</p>
                <div class="mt-10 sm:mt-12">
                    <div class="max-w-xl mx-auto rounded-lg shadow-md overflow-hidden bg-white">
                        <div class="flex">
                            <input type="text" placeholder="Cari nama atlet..."
                                class="flex-1 px-4 py-3 focus:outline-none text-gray-900 bg-white">
                            <button
                                class="px-6 py-3 bg-red-800 hover:bg-red-900 text-white transition-all">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-cabang-olahraga></x-cabang-olahraga>

    <x-daftar-atlet></x-daftar-atlet>

    <x-prestasi></x-prestasi>

    <x-footer></x-footer>

</x-layout>
