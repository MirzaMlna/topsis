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
                    <form action="{{ route('criteria.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-bold text-gray-900">Nama
                                Kriteria</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Nama Kriteria" required>
                        </div>

                        <div class="mb-4">
                            <label for="weight" class="block text-sm font-bold text-gray-900">Bobot <span
                                    class="font-normal text-gray-500">(1 s/d 5)</span></label>
                            <input type="number" step="1" min="1" max="5" id="weight"
                                name="weight"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Bobot (1-5)" required>
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-sm font-bold text-gray-900">Tipe <span
                                    class="font-normal text-gray-500">(Benefit/Cost)</span></label>
                            <select id="type" name="type"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required>
                                <option value="">Pilih Tipe</option>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="unit" class="block text-sm font-bold text-gray-900">Satuan</label>
                            <input type="text" id="unit" name="unit"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Satuan" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Simpan
                            </button>
                            <a href="{{ route('criteria.index') }}"
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
