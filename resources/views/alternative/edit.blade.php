<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Alternatif
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="#" method="POST">
                        @csrf

                        <!-- Kode -->
                        <div class="mb-4">
                            <label for="kode" class="block text-sm font-bold text-gray-900">Kode Alternatif <span
                                    class="font-normal text-gray-500">(Contoh : ALT001)</span></label>
                            <input type="text" id="kode" name="kode"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Nama Medsos -->
                        <div class="mb-4">
                            <label for="nama_medsos" class="block text-sm font-bold text-gray-900">Nama Medsos</label>
                            <input type="text" id="nama_medsos" name="nama_medsos"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Medsos yang Dipakai -->
                        <div class="mb-4">
                            <label for="medsos_dipakai" class="block text-sm font-bold text-gray-900">Medsos yang
                                Dipakai</label>
                            <input type="text" id="medsos_dipakai" name="medsos_dipakai"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Biaya per Konten -->
                        <div class="mb-4">
                            <label for="biaya" class="block text-sm font-bold text-gray-900">Biaya per Konten</label>
                            <input type="number" min="0" step="100000" id="biaya" name="biaya"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Kontak -->
                        <div class="mb-4">
                            <label for="kontak" class="block text-sm font-bold text-gray-900">Kontak</label>
                            <input type="text" id="kontak" name="kontak"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Simpan
                            </button>
                            <a href="{{ route('alternative.index') }}"
                                class="ml-2 inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
