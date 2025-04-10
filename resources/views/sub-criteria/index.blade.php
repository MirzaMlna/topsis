<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bobot Sub Kriteria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-8">
            <div class="mt-b">
                <a href="" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <i class="bi bi-ui-checks"></i> Tambah Sub-Kriteria
                </a>
            </div>
            <!-- IPK -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C1 : IPK</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Sub Kriteria</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Bobot (W)</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">≥ 3.75</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">3.51 - 3.74</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">3.00 - 3.50</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">2.50 - 2.99</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">
                                    < 2.50</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Keterampilan Teknis -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C2 : Keterampilan Teknis</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Sub Kriteria</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Bobot (W)</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">Sangat Baik</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Baik</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Cukup</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">Kurang</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">Sangat Kurang</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Pengalaman -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C3 : Pengalaman</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Sub Kriteria</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Bobot (W)</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">Memenangkan lomba & Berorganisasi</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Mengikuti lomba & Berorganisasi</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Memenangkan lomba / Berorganisasi</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">
                                    Mengikuti lomba</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">Tidak Ada</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Kesesuaian Bidang yang Diperlukan -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C4 : Kesesuaian Bidang yang Diperlukan</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Sub Kriteria</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Bobot (W)</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">Sangat Sesuai</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Sesuai</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Cukup Sesuai</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">Kurang Sesuai</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">Tidak Sesuai</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hasil Wawancara -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C5 : Hasil Wawancara</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Sub Kriteria</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Bobot (W)</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">Sangat Baik</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Baik</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Cukup</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">Kurang</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">Sangat Kurang</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
