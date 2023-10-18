<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- 6706223162 - Rafa Suryaputra -->

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Quantity</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $collection->id }}</td>
                                <td>{{ $collection->nameKoleksi }}</td>
                                <td>
                                    @if ($collection->jenisKoleksi == 1)
                                        Buku
                                    @elseif ($collection->jenisKoleksi == 2)
                                        Majalah
                                    @elseif ($collection->jenisKoleksi == 3)
                                        Cakram Digital
                                    @else
                                        dan lain-lain
                                    @endif
                                </td>
                                <td>{{ $collection->jumlahKoleksi }}</td>
                                <td>{{ $collection->created_at }}</td>
                                <td>{{ $collection->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
