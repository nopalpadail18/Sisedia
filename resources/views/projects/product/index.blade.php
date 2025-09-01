<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-blue-100 rounded-lg shadow-md p-4">
                            <h3 class="text-lg font-bold mb-2">Informasi Produk</h3>
                            <p class="text-gray-700">Total produk: 20</p>
                        </div>
                        <div class="bg-green-100 rounded-lg shadow-md p-4">
                            <h3 class="text-lg font-bold mb-2">Kategori Produk</h3>
                            <p class="text-gray-700">Total kategori: 5</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                        <form method="GET" action="" class="flex items-center w-full md:w-auto">
                            <input type="text" name="search" placeholder="Cari produk..."
                                class="input input-bordered w-full md:w-64" value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary ml-2">Cari</button>
                        </form>
                        <div class="flex gap-2">
                            <a href="" class="btn btn-success text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah Data
                            </a>
                            <a href="#" class="btn btn-outline btn-secondary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                    <rect x="6" y="8" width="12" height="8" rx="2"
                                        fill="currentColor" />
                                </svg>
                                Export PDF
                            </a>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b">Nama Produk</th>
                                    <th class="px-4 py-2 border-b">Kategori</th>
                                    <th class="px-4 py-2 border-b">Harga</th>
                                    <th class="px-4 py-2 border-b">Jumlah</th>
                                    <th class="px-4 py-2 border-b">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b">Nama Produk</td>
                                    <td class="px-4 py-2 border-b">Kategori Produk</td>
                                    <td class="px-4 py-2 border-b">
                                        Rp 250.000</td>
                                    <td class="px-4 py-2 border-b">10</td>
                                    <td class="px-4 py-2 border-b">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b">Nama Produk</td>
                                    <td class="px-4 py-2 border-b">Kategori Produk</td>
                                    <td class="px-4 py-2 border-b">
                                        Rp 250.000</td>
                                    <td class="px-4 py-2 border-b">10</td>
                                    <td class="px-4 py-2 border-b">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b">Nama Produk</td>
                                    <td class="px-4 py-2 border-b">Kategori Produk</td>
                                    <td class="px-4 py-2 border-b">
                                        Rp 250.000</td>
                                    <td class="px-4 py-2 border-b">10</td>
                                    <td class="px-4 py-2 border-b">
                                        <a href="#" class="btn btn-error">Hapus</a>
                                    </td>
                                </tr>
                                {{-- @foreach ($products as $product)
                                    <tr>
                                        <td class="px-4 py-2 border-b">{{ $product->name }}</td>
                                        <td class="px-4 py-2 border-b">{{ $product->category->name ?? '-' }}</td>
                                        <td class="px-4 py-2 border-b">
                                            Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td class="px-4 py-2 border-b">
                                            <a href="{{ route('products.show', $product) }}"
                                                class="text-blue-600 hover:underline">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
