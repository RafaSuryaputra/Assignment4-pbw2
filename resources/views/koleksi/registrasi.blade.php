<!-- 6706223162 - Rafa Suryaputra -->

<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.storeKoleksi') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nameKoleksi" :value="__('Name Koleksi')" />
            <x-text-input id="nameKoleksi" class="block w-full mt-1" type="text" name="nameKoleksi" :value="old('nameKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('nameKoleksi')" class="mt-2" />
        </div>

        <!-- Jenis Koleksi -->
        <div>
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <select name="jenisKoleksi" id="jenisKoleksi" class="block w-full mt-1" required>
                <option value="1">Buku</option>
                <option value="2">Majalah</option>
                <option value="3">Cakram Digital</option>
                <!-- Anda dapat menambahkan lebih banyak opsi sesuai kebutuhan -->
            </select>
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>

        <!-- Jumlah Koleksi -->
        <div>
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block w-full mt-1" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <!-- <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> -->

            <x-primary-button class="ml-4">
                {{ __('Simpan') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
