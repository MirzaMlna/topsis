<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Kriteria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="#" method="POST">
                        <!-- Nama Kriteria -->
                        <div class="mb-4">
                            <label for="nama_kriteria" class="block text-sm font-bold text-gray-900">Kriteria</label>
                            <input type="text" id="nama_kriteria" name="nama_kriteria"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Bobot -->
                        <div class="mb-4">
                            <label for="bobot" class="block text-sm font-bold text-gray-900">Bobot <span
                                    class="font-normal text-gray-500">(0.1 s/d 1)</span></label>
                            <input type="number" step="0.01" min="0" max="1" id="bobot"
                                name="bobot"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Tipe -->
                        <div class="mb-4">
                            <label for="tipe" class="block text-sm font-bold text-gray-900">Tipe</label>
                            <select id="tipe" name="tipe"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Tipe</option>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>

                        <!-- Satuan -->
                        <div class="mb-4">
                            <label for="satuan" class="block text-sm font-bold text-gray-900">Satuan</label>
                            <input type="text" id="satuan" name="satuan"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="mr-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-900">Simpan</button>
                            <a href="{{ route('criteria.index') }}"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
