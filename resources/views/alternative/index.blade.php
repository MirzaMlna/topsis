<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alternatif
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">No</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Kode</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Nama Lengkap
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Program Studi
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Universitas
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Kontak</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Alamat</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-900 font-bold uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">ALT001</td>
                                <td class="px-6 py-4">Ahmad Rizky</td>
                                <td class="px-6 py-4">Teknik Informatika</td>
                                <td class="px-6 py-4">Universitas Lambung Mangkurat</td>
                                <td class="px-6 py-4">081234567890</td>
                                <td class="px-6 py-4">Banjarmasin</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">ALT002</td>
                                <td class="px-6 py-4">Nabila Putri</td>
                                <td class="px-6 py-4">Manajemen</td>
                                <td class="px-6 py-4">Universitas Muhammadiyah</td>
                                <td class="px-6 py-4">082345678901</td>
                                <td class="px-6 py-4">Banjarbaru</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">ALT003</td>
                                <td class="px-6 py-4">Rizal Fahmi</td>
                                <td class="px-6 py-4">Teknik Elektro</td>
                                <td class="px-6 py-4">Politeknik Negeri Banjarmasin</td>
                                <td class="px-6 py-4">083456789012</td>
                                <td class="px-6 py-4">Martapura</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900 ml-2">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tombol tambah -->
                    <div class="mt-4">
                        <a href="{{ route('alternative.create') }}"
                            class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            <i class="bi bi-person"></i> Tambah Alternatif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
