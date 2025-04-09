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
                                <th class="px-6 py-3 text-left text-md text-gray-900 font-bold uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-md text-gray-900 font-bold uppercase">Nama Mahasiswa
                                </th>
                                <th class="px-6 py-3 text-left text-md text-gray-900 font-bold uppercase">NIM</th>
                                <th class="px-6 py-3 text-left text-md text-gray-900 font-bold uppercase">Program Studi
                                </th>
                                <th class="px-6 py-3 text-left text-md text-gray-900 font-bold uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Ahmad Fauzi</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">2110510012</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Teknik Informatika</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Siti Nurhaliza</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">2110510033</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Sistem Informasi</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Muhammad Rizky</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">2110510045</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">Teknik Elektro</td>
                                <td class="px-6 py-4 whitespace-nowrap text-md text-gray-900">
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
