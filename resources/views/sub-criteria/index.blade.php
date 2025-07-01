<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bobot Sub Kriteria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-8">
            <div class="mt-b">
                <a href="{{ route('sub-criteria.create') }}"
                    class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <i class="bi bi-ui-checks"></i> Tambah Sub-Kriteria
                </a>
            </div>

            @foreach ($criteria as $kriteria)
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">C{{ $loop->iteration }} : {{ $kriteria->name }}</h3>
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
                                @php $no = 1; @endphp
                                @forelse ($subCriteria->where('criteria_id', $kriteria->id) as $subKriteria)
                                    <tr>
                                        <td class="px-6 py-4">{{ $no++ }}</td>
                                        <td class="px-6 py-4">{{ $subKriteria->sub_criteria }}</td>
                                        <td class="px-6 py-4">{{ $subKriteria->weight }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('sub-criteria.edit', $subKriteria->id) }}"
                                                class="text-blue-500">Edit</a>
                                            <form action="{{ route('sub-criteria.destroy', $subKriteria->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 ml-2"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus sub kriteria ini?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center px-6 py-4 text-gray-500">Belum ada
                                            sub-kriteria.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-app-layout>
