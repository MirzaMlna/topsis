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

                    <form action="{{ route('alternative.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Kode</label>
                            <input type="text" name="kode" class="w-full border rounded px-3 py-2" placeholder="Contoh: TM1" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Instansi</label>
                            <input type="text" name="instansi" class="w-full border rounded px-3 py-2" placeholder="Contoh: PT Telkom Indonesia" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Bidang</label>
                            <input type="text" name="bidang" class="w-full border rounded px-3 py-2" placeholder="Contoh: Teknologi Informasi" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Alamat</label>
                            <input type="text" name="alamat" class="w-full border rounded px-3 py-2" placeholder="Contoh: Jl. Merpati No.123, Bandung" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
