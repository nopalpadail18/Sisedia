<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pencatatan Barang Masuk (Restock)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Pindai Barcode</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Arahkan kamera ke barcode produk. Nomor barcode akan terisi otomatis.
                        </p>
                        <div id="reader" class="mt-4 border-2 border-dashed rounded-lg p-2"
                            style="max-width: 500px;"></div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Detail Stok Masuk</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Setelah memindai, masukkan jumlah stok yang masuk.
                        </p>

                        <form method="POST" action="#" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <label for="barcode_result"
                                    class="block font-medium text-sm text-gray-700">Barcode</label>
                                <input id="barcode_result" name="barcode" type="text"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    placeholder="Akan terisi otomatis setelah scan" required>
                            </div>

                            <div>
                                <label for="quantity" class="block font-medium text-sm text-gray-700">Jumlah
                                    Masuk</label>
                                <input id="quantity" name="quantity" type="number" min="1"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required autofocus>
                            </div>

                            <div>
                                <label for="transaction_date" class="block font-medium text-sm text-gray-700">Tanggal
                                    Masuk</label>
                                <input id="transaction_date" name="transaction_date" type="date"
                                    value="{{ date('Y-m-d') }}"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>
                            </div>
                            <div class="flex items-center gap-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Simpan Stok
                                </button>
                                <a href="{{ route('inventory.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code matched = ${decodedText}`, decodedResult);

            document.getElementById('barcode_result').value = decodedText;

            alert(`Barcode ${decodedText} berhasil dipindai!`);

            document.getElementById('quantity').focus();
        }

        function onScanFailure(error) {
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 150
                }
            },
            false);

        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</x-app-layout>
