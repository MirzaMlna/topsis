<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Kriteria Seleksi Magang
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nama Kriteria -->
                        <div class="mb-4">
                            <label for="nama_kriteria" class="block text-sm font-bold text-gray-900">Nama
                                Kriteria</label>
                            <input type="text" id="nama_kriteria" name="nama_kriteria"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="" required>
                        </div>

                        <!-- Bobot -->
                        <div class="mb-4">
                            <label for="bobot" class="block text-sm font-bold text-gray-900">Bobot <span
                                    class="font-normal text-gray-500">(1 s/d 5)</span></label>
                            <input type="number" step="1" min="1" max="5" id="bobot"
                                name="bobot"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="" required>
                        </div>

                        <!-- Tipe -->
                        <div class="mb-4">
                            <label for="tipe" class="block text-sm font-bold text-gray-900">Tipe <span
                                    class="font-normal text-gray-500">(Benefit/Cost)</span></label>
                            <select id="tipe" name="tipe"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required>
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
                                placeholder="" required>
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-900">Simpan
                                Perubahan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
