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

                    <form action="#" method="POST">
                        <!-- Nama Mahasiswa -->
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-bold text-gray-900">Nama Mahasiswa</label>
                            <input type="text" id="nama" name="nama"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- NIM -->
                        <div class="mb-4">
                            <label for="nim" class="block text-sm font-bold text-gray-900">NIM</label>
                            <input type="text" id="nim" name="nim"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="">
                        </div>

                        <!-- Program Studi -->
                        <div class="mb-4">
                            <label for="study_program" class="block text-sm font-bold text-gray-900">Program
                                Studi</label>
                            <select id="study_program" name="study_program"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Program Studi</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Ilmu Administrasi Publik">Ilmu Administrasi Publik</option>
                                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                                <option value="Pendidikan Olahraga">Pendidikan Olahraga</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Peternakan">Peternakan</option>
                                <option value="Agribisnis">Agribisnis</option>
                                <option value="Hukum Ekonomi Syari’ah">Hukum Ekonomi Syari’ah</option>
                                <option value="Ekonomi Syari’ah">Ekonomi Syari’ah</option>
                                <option value="Pendidikan Guru Madrasah Ibtidaiyah">Pendidikan Guru Madrasah Ibtidaiyah
                                </option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Farmasi">Farmasi</option>
                            </select>
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="mr-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-900">Simpan</button>
                            <a href="{{ route('alternative.index') }}"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
