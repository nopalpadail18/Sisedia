{{-- resources/views/components/sidebar.blade.php --}}

<aside class="w-64" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-white h-screen border-r border-gray-200">
        {{-- Logo Aplikasi --}}
        <a href="{{ route('dashboard') }}" class="flex items-center ps-2.5 mb-5">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            <span class="self-center text-xl font-semibold whitespace-nowrap ml-3">SiSedia</span>
        </a>

        {{-- Daftar Menu Navigasi --}}
        <ul class="space-y-2">
            <li>
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dasbor') }}
                </x-responsive-nav-link>
            </li>
            <li>
                <x-responsive-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                    {{ __('Produk') }}
                </x-responsive-nav-link>
            </li>
            <li>
                <x-responsive-nav-link :href="route('inventory.index')" :active="request()->routeIs('inventory.index')">
                    {{ __('Stok Masuk') }}
                </x-responsive-nav-link>
            </li>
            <li>
                <x-responsive-nav-link :active="request()->routeIs('stock.out.create')">
                    {{ __('Stok Keluar') }}
                </x-responsive-nav-link>
            </li>
            <li>
                <x-responsive-nav-link :active="request()->routeIs('reports.*')">
                    {{ __('Laporan') }}
                </x-responsive-nav-link>
            </li>
        </ul>
    </div>
</aside>
