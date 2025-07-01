<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Sub Kriteria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md p-6">
            <form method="POST" action="{{ route('sub-criteria.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="criteria_id" class="block text-gray-700 text-sm font-bold mb-2">Kriteria</label>
                    <select name="criteria_id" id="criteria_id"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Pilih Kriteria</option>
                        @foreach ($criteria as $kriteria)
                            <option value="{{ $kriteria->id }}">{{ $kriteria->name }}</option>
                        @endforeach
                    </select>
                    @error('criteria_id')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="sub_criteria" class="block text-gray-700 text-sm font-bold mb-2">Nama Sub
                        Kriteria</label>
                    <input type="text" name="sub_criteria" id="sub_criteria"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        value="{{ old('sub_criteria') }}">
                    @error('sub_criteria')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">Bobot (W)</label>
                    <input type="number" name="weight" id="weight"
                        class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        value="{{ old('weight') }}">
                    @error('weight')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan
                    </button>
                    <a href="{{ route('sub-criteria.index') }}"
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
