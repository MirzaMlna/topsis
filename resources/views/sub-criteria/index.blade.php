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

            <!-- Jumlah Follower -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C1 : Jumlah Follower</h3>
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
                                <td class="px-6 py-4">≥ 500K</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">≥ 200K</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">≥ 100K</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">≥ 50K</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">
                                    < 50K</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engagement Rate -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C2 : Engagement Rate</h3>
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
                                <td class="px-6 py-4">≥ 10%</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">7% - 9.99%</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">5% - 6.99%</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">3% - 4.99%</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a href="#"
                                        class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">
                                    < 3%</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Relevansi Konten -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C3 : Relevansi Konten</h3>
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
                                <td class="px-6 py-4">Sangat Relevan</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Relevan</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Cukup Relevan</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">Kurang Relevan</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">Tidak Relevan</td>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Kualitas Konten -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C4 : Kualitas Konten</h3>
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

            <!-- Audience Demografi -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C5 : Audience Demografi</h3>
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
                                <td class="px-6 py-4">Mayoritas sesuai target pasar</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">Sebagian besar sesuai target pasar</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">Beberapa sesuai target pasar</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">Tidak sesuai target pasar</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Biaya -->
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">C6 : Biaya</h3>
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
                                <td class="px-6 py-4">≥ 500.000</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">≥ 1.000.000</td>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">≥ 2.000.000</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">≥ 4.000.000</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4"><a href="#" class="text-blue-500">Edit</a> <a
                                        href="#" class="text-red-500 ml-2">Remove</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">≥ 5.000.000 </td>
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
