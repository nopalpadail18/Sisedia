<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan Selamat Datang --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    {{ __('Selamat Datang, ') }} {{ Auth::user()->nama_bisnis }}!
                </div>
            </div>

            {{-- Grid untuk Kartu Ringkasan (Stat Cards) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Kartu 1: Total Jenis Produk -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-600">Total Jenis Produk</h3>
                        <p class="mt-2 text-3xl font-bold text-gray-900">
                            150
                            {{-- Ganti dengan data dinamis: {{ $totalProducts }} --}}
                        </p>
                    </div>
                </div>

                <!-- Kartu 2: Total Nilai Persediaan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-600">Total Nilai Persediaan</h3>
                        <p class="mt-2 text-3xl font-bold text-gray-900">
                            Rp 25.000.000
                            {{-- Ganti dengan data dinamis: {{ $totalStockValue }} --}}
                        </p>
                    </div>
                </div>

                <!-- Kartu 3: Peringatan Stok Menipis -->
                <div class="bg-yellow-100 border-l-4 border-yellow-500 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-yellow-800">Stok Akan Habis</h3>
                        <p class="mt-2 text-3xl font-bold text-yellow-900">
                            8 Produk
                            {{-- Ganti dengan data dinamis: {{ $lowStockProductsCount }} --}}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
