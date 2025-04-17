<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Alternatif
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('alternative.update', $alternative->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="code" class="block text-sm font-bold text-gray-900">Kode Alternatif <span
                                    class="font-normal text-gray-500">(Contoh : ALT001)</span></label>
                            <input type="text" id="code" name="code"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Kode Alternatif" value="{{ $alternative->code }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="social_media_name" class="block text-sm font-bold text-gray-900">Nama
                                Medsos</label>
                            <input type="text" id="social_media_name" name="social_media_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Nama Medsos" value="{{ $alternative->social_media_name }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="social_media_platform" class="block text-sm font-bold text-gray-900">Medsos yang
                                Dipakai</label>
                            <input type="text" id="social_media_platform" name="social_media_platform"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Medsos yang Dipakai"
                                value="{{ $alternative->social_media_platform }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="cost_per_content" class="block text-sm font-bold text-gray-900">Biaya per
                                Konten</label>
                            <input type="number" min="0" step="100000" id="cost_per_content"
                                name="cost_per_content"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Biaya per Konten" value="{{ $alternative->cost_per_content }}">
                        </div>

                        <div class="mb-4">
                            <label for="contact" class="block text-sm font-bold text-gray-900">Kontak</label>
                            <input type="text" id="contact" name="contact"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan Kontak" value="{{ $alternative->contact }}">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Update
                            </button>
                            <a href="{{ route('alternative.index') }}"
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
