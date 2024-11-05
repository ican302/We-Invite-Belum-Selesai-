<x-app-layout>
    <!-- Bottom Navbar -->
    <div class="fixed bottom-0 left-0 right-0 z-30 bg-white border-t border-gray-200">
        <div id="bottom-navbar" class="flex overflow-x-auto whitespace-nowrap justify-around items-center py-2">
            <a href="#pengantin" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-heart text-lg"></i>
                <span class="text-xs">Pengantin</span>
            </a>
            <a href="#acara" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-clock text-lg"></i>
                <span class="text-xs">Acara</span>
            </a>
            <a href="#streaming" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-broadcast-tower text-lg"></i>
                <span class="text-xs">Streaming</span>
            </a>
            <a href="#foto-video"
                class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-photo-film text-lg"></i>
                <span class="text-xs">Foto & Video</span>
            </a>
            <a href="#cerita" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-book-open text-lg"></i>
                <span class="text-xs">Cerita</span>
            </a>
            <a href="#quote" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-quote-right text-lg"></i>
                <span class="text-xs">Quote</span>
            </a>
            <a href="#kado-digital"
                class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-gift text-lg"></i>
                <span class="text-xs">Kado Digital</span>
            </a>
            <a href="#musik" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-music text-lg"></i>
                <span class="text-xs">Musik</span>
            </a>
            <a href="#tamu" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-user-friends text-lg"></i>
                <span class="text-xs">Tamu</span>
            </a>
            <a href="#ucapan-doa"
                class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-comment-dots text-lg"></i>
                <span class="text-xs">Ucapan & Doa</span>
            </a>
            <a href="#tema" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-palette text-lg"></i>
                <span class="text-xs">Tema</span>
            </a>
        </div>
    </div>
    <!-- Tombol Navigasi Up & Down -->
    <div class="fixed bottom-24 md:bottom-20 right-2 z-30 flex flex-col space-y-2">
        <!-- Tombol ke Atas -->
        <a href="#" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"
            class="bg-gray-800 text-white rounded-full p-3 shadow-lg hover:bg-black transition-colors">
            <i class="fas fa-arrow-up text-lg"></i>
        </a>
        <!-- Tombol ke Bawah -->
        <a href="#"
            onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' }); return false;"
            class="bg-gray-800 text-white rounded-full p-3 shadow-lg hover:bg-black transition-colors">
            <i class="fas fa-arrow-down text-lg"></i>
        </a>
    </div>
    <!-- Konten -->
    <div class="mx-auto px-[0.20rem] md:px-4 pb-24 pt-[1rem] md:pt-10 shadow-lg">
        <!-- Flash Message -->
        <div>
            @if (session('success'))
                <div id="successModal" tabindex="-1" aria-hidden="true"
                    class="flex justify-center fixed top-0 right-0 left-0 z-50 bg-black/80 items-center w-full md:inset-0 h-modal md:h-full hidden">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto opacity-0 scale-50">
                        <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                            <button type="button"
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-gray-100 hover:bg-gray-200 hover:text-green-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                onclick="closeModal('successModal')">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">
                                    Close modal
                                </span>
                            </button>
                            <br>
                            <div
                                class="w-20 h-20 rounded-full bg-green-100 p-2 flex items-center justify-center mx-auto mb-3.5 mt-3.5">
                                <svg aria-hidden="true" class="w-8 h-8 text-green-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="mb-4 text-gray-900 text-lg font-bold">
                                BERHASIL
                            </h2>
                            <p class="mb-4 text-gray-900">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
            @elseif (session('error'))
                <div id="errorModal" tabindex="-1" aria-hidden="true"
                    class="flex justify-center fixed top-0 right-0 left-0 z-50 bg-black/80 items-center w-full md:inset-0 h-modal md:h-full hidden">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto opacity-0 scale-50">
                        <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                            <button type="button"
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-gray-100 hover:bg-gray-200 hover:text-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                onclick="closeModal('errorModal')">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">
                                    Close modal
                                </span>
                            </button>
                            <br>
                            <div
                                class="w-20 h-20 rounded-full bg-red-100 p-2 flex items-center justify-center mx-auto mb-3.5 mt-3.5">
                                <svg aria-hidden="true" class="w-8 h-8 text-red-500" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 18L18 6M6 6l12 12" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h2 class="mb-4 text-gray-900 text-lg font-bold">
                                ERROR
                            </h2>
                            <p class="mb-4 text-gray-900">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- Data Undangan -->
        <section class="bg-white py-8 px-4 antialiased mx-auto md:py-16 rounded-lg shadow-lg">
            <!-- Pengantin -->
            <div id="pengantin" class="py-8 px-4 mx-auto lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Data Pengantin
                </h2>
                <form action="{{ route('user.mempelai.store', $invitation) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
                        <!-- Pengantin Pria -->
                        <div class="flex flex-col items-center">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">
                                Pengantin Pria
                            </h3>
                            <img src="{{ asset($mempelai->foto_pria ?? '\tema\tema-1\images\photos-videos\default.png') }}"
                                alt="Foto Pengantin Pria" class="w-48 h-48 rounded-lg mt-2 mb-10">
                            <br>
                            <div class="w-full mb-4">
                                <label for="foto_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Upload Foto
                                </label>
                                <input type="file" name="foto_pria" id="foto_pria" accept="image/*"
                                    class="custom-input">
                            </div>
                            <div class="w-full mb-4">
                                <label for="nama_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Pengantin
                                </label>
                                <input type="text" name="nama_pria" id="nama_pria"
                                    value="{{ old('nama_pria', $mempelai->nama_pria ?? '') }}" class="custom-input"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="ayah_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Ayah
                                </label>
                                <input type="text" name="ayah_pria" id="ayah_pria"
                                    value="{{ old('ayah_pria', $mempelai->ayah_pria ?? '') }}" class="custom-input"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="ibu_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Ibu
                                </label>
                                <input type="text" name="ibu_pria" id="ibu_pria"
                                    value="{{ old('ibu_pria', $mempelai->ibu_pria ?? '') }}" class="custom-input"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="anak_ke_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Anak Ke
                                </label>
                                <input type="text" name="anak_ke_pria" id="anak_ke_pria"
                                    value="{{ old('anak_ke_pria', $mempelai->anak_ke_pria ?? '') }}"
                                    class="custom-input" required
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="instagram_link_pria" class="block mb-2 text-sm font-medium text-gray-900">
                                    Link Instagram (Opsional)
                                </label>
                                <input type="text" name="instagram_link_pria" id="instagram_link_pria"
                                    value="{{ old('instagram_link_pria', $mempelai->instagram_link_pria ?? '') }}"
                                    class="custom-input">
                            </div>
                        </div>
                        <!-- Pengantin Wanita -->
                        <div class="flex flex-col items-center">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">
                                Pengantin Wanita
                            </h3>
                            <img src="{{ asset($mempelai->foto_wanita ?? '\tema\tema-1\images\photos-videos\default.png') }}"
                                alt="Foto Pengantin Wanita" class="w-48 h-48 rounded-lg mt-2 mb-10">
                            <br>
                            <div class="w-full mb-4">
                                <label for="foto_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                                    Upload Foto
                                </label>
                                <input type="file" name="foto_wanita" id="foto_wanita" accept="image/*"
                                    class="custom-input">
                            </div>
                            <div class="w-full mb-4">
                                <label for="nama_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Pengantin
                                </label>
                                <input type="text" name="nama_wanita" id="nama_wanita"
                                    value="{{ old('nama_wanita', $mempelai->nama_wanita ?? '') }}"
                                    class="custom-input" required
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="ayah_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Ayah
                                </label>
                                <input type="text" name="ayah_wanita" id="ayah_wanita"
                                    value="{{ old('ayah_wanita', $mempelai->ayah_wanita ?? '') }}"
                                    class="custom-input" required
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="ibu_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                                    Nama Ibu
                                </label>
                                <input type="text" name="ibu_wanita" id="ibu_wanita"
                                    value="{{ old('ibu_wanita', $mempelai->ibu_wanita ?? '') }}" class="custom-input"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="anak_ke_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                                    Anak Ke
                                </label>
                                <input type="text" name="anak_ke_wanita" id="anak_ke_wanita"
                                    value="{{ old('anak_ke_wanita', $mempelai->anak_ke_wanita ?? '') }}"
                                    class="custom-input" required
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="w-full mb-4">
                                <label for="instagram_link_wanita"
                                    class="block mb-2 text-sm font-medium text-gray-900">
                                    Link Instagram (Opsional)
                                </label>
                                <input type="text" name="instagram_link_wanita" id="instagram_link_wanita"
                                    value="{{ old('instagram_link_wanita', $mempelai->instagram_link_wanita ?? '') }}"
                                    class="custom-input">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-2">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Acara -->
            <div id="acara" class="py-8 px-4 mx-auto lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Acara
                </h2>
                <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto rounded-lg max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full">
                        <thead class="text-xs text-nowrap text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-6">Nama Acara</th>
                                <th scope="col" class="px-6 py-6">Tanggal</th>
                                <th scope="col" class="px-6 py-6">Jam Mulai</th>
                                <th scope="col" class="px-6 py-6">Jam Selesai</th>
                                <th scope="col" class="px-6 py-6">Zona Waktu</th>
                                <th scope="col" class="px-6 py-6">Nama Tempat</th>
                                <th scope="col" class="px-6 py-6">Alamat Tempat</th>
                                <th scope="col" class="px-6 py-6">Link Google Map</th>
                                <th scope="col" class="px-6 py-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($acara->isEmpty())
                                <tr>
                                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada acara yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($acara as $data)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">
                                            {{ $data->nama_acara }}
                                        </td>
                                        <td class="px-6 py-4">{{ $data->tanggal_acara }}</td>
                                        <td class="px-6 py-4">{{ $data->jam_mulai }}</td>
                                        <td class="px-6 py-4">{{ $data->jam_selesai }}</td>
                                        <td class="px-6 py-4">{{ $data->zona_waktu }}</td>
                                        <td class="px-6 py-4">{{ $data->nama_tempat }}</td>
                                        <td class="px-6 py-4">{{ $data->alamat_tempat }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ $data->link_google_maps }}" target="_blank"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                <i class="fas fa-map-marker-alt mr-2"></i>
                                                <span>Buka</span>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-{{ $data->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-{{ $data->id }}"
                                                class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-edit mr-2"></i>
                                                <span>Ubah</span>
                                            </button>
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-{{ $data->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-{{ $data->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-2"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Ubah Acara -->
                                    <div id="hs-scale-animation-modal-{{ $data->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-{{ $data->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Ubah Acara
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-{{ $data->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <form action="{{ route('user.acara.update', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                            <div class="mb-4">
                                                                <label for="edit_nama_acara" class="block mb-2">
                                                                    Nama Acara
                                                                </label>
                                                                <input type="text" name="nama_acara"
                                                                    id="edit_nama_acara" class="custom-input"
                                                                    value="{{ $data->nama_acara }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_tanggal_acara" class="block mb-2">
                                                                    Tanggal Acara
                                                                </label>
                                                                <input type="date" name="tanggal_acara"
                                                                    id="edit_tanggal_acara" class="custom-input"
                                                                    value="{{ $data->tanggal_acara }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_jam_mulai" class="block mb-2">
                                                                    Jam Mulai
                                                                </label>
                                                                <input type="time" name="jam_mulai"
                                                                    id="edit_jam_mulai" class="custom-input"
                                                                    value="{{ $data->jam_mulai }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_jam_selesai" class="block mb-2">
                                                                    Jam Selesai
                                                                </label>
                                                                <input type="time" name="jam_selesai"
                                                                    id="edit_jam_selesai" class="custom-input"
                                                                    value="{{ $data->jam_selesai }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="dropdown">
                                                                <label for="zona_waktu" class="block mb-2">
                                                                    Zona Waktu
                                                                </label>
                                                                <div id="dropdownButtonEdit-{{ $data->id }}"
                                                                    class="custom-input cursor-pointer relative">
                                                                    <span>{{ $data->zona_waktu }}</span>
                                                                    <i class="fas fa-chevron-down icon"></i>
                                                                </div>
                                                                <div id="dropdownMenuEdit-{{ $data->id }}"
                                                                    class="dropdown-menu" style="display: none;">
                                                                    <div class="rounded-t-lg dropdown-item"
                                                                        onclick="selectOption('WIB', 'dropdownButtonEdit-{{ $data->id }}', 'zona_waktu-{{ $data->id }}')">
                                                                        WIB
                                                                    </div>
                                                                    <div class="dropdown-item"
                                                                        onclick="selectOption('WITA', 'dropdownButtonEdit-{{ $data->id }}', 'zona_waktu-{{ $data->id }}')">
                                                                        WITA
                                                                    </div>
                                                                    <div class="rounded-b-lg dropdown-item"
                                                                        onclick="selectOption('WIT', 'dropdownButtonEdit-{{ $data->id }}', 'zona_waktu-{{ $data->id }}')">
                                                                        WIT
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="zona_waktu"
                                                                    id="zona_waktu-{{ $data->id }}"
                                                                    value="{{ $data->zona_waktu }}">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_nama_tempat" class="block mb-2">
                                                                    Nama Tempat
                                                                </label>
                                                                <input type="text" name="nama_tempat"
                                                                    id="edit_nama_tempat" class="custom-input"
                                                                    value="{{ $data->nama_tempat }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_alamat_tempat" class="block mb-2">
                                                                    Alamat Tempat
                                                                </label>
                                                                <input type="text" name="alamat_tempat"
                                                                    id="edit_alamat_tempat" class="custom-input"
                                                                    value="{{ $data->alamat_tempat }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="edit_link_google_maps" class="block mb-2">
                                                                    Link Google Maps
                                                                </label>
                                                                <input type="url" name="link_google_maps"
                                                                    id="edit_link_google_maps" class="custom-input"
                                                                    value="{{ $data->link_google_maps }}" required
                                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                    oninput="this.setCustomValidity('')">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="flex justify-end mt-4">
                                                            <button type="submit"
                                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-save mr-2"></i>
                                                                <span class="mr-2">Simpan</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Acara -->
                                    <div id="hs-scale-animation-modal-hapus-{{ $data->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-{{ $data->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus Acara
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-{{ $data->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <p>
                                                        Apakah Anda yakin ingin menghapus acara
                                                        <strong class="font-bold">{{ $data->nama_acara }}</strong>?
                                                    </p>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('user.acara.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                                <i class="fas fa-trash-alt mr-2"></i>
                                                                <span class="mr-2">Hapus</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- Tambah Acara -->
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Tambah Acara
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('user.acara.store', $invitation->id) }}" method="POST"
                    class="mx-auto max-w-2xl">
                    @csrf
                    <div class="grid gap-4 mb-6">
                        <div>
                            <label for="nama_acara" class="block mb-2 text-sm font-medium text-gray-900">
                                Nama Acara
                            </label>
                            <input type="text" name="nama_acara" id="nama_acara" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div>
                            <label for="tanggal_acara" class="block mb-2 text-sm font-medium text-gray-900">
                                Tanggal Acara
                            </label>
                            <input type="date" name="tanggal_acara" id="tanggal_acara" class="custom-input"
                                required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div>
                            <label for="jam_mulai" class="block mb-2 text-sm font-medium text-gray-900">
                                Jam Mulai
                            </label>
                            <input type="time" name="jam_mulai" id="jam_mulai" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div>
                            <label for="jam_selesai" class="block mb-2 text-sm font-medium text-gray-900">
                                Jam Selesai
                            </label>
                            <input type="time" name="jam_selesai" id="jam_selesai" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="dropdown">
                            <label for="zona_waktu_tambah" class="block mb-2 text-sm font-medium text-gray-900">
                                Zona Waktu
                            </label>
                            <div id="dropdownButtonTambah" class="custom-input cursor-pointer relative">
                                <span>. . .</span>
                                <i class="fas fa-chevron-down icon"></i>
                            </div>
                            <div id="dropdownMenuTambah" class="dropdown-menu" style="display: none;">
                                <div class="rounded-t-lg dropdown-item"
                                    onclick="selectOption('WIB', 'dropdownButtonTambah', 'zona_waktu_tambah')">WIB
                                </div>
                                <div class="dropdown-item"
                                    onclick="selectOption('WITA', 'dropdownButtonTambah', 'zona_waktu_tambah')">WITA
                                </div>
                                <div class="rounded-b-lg dropdown-item"
                                    onclick="selectOption('WIT', 'dropdownButtonTambah', 'zona_waktu_tambah')">WIT
                                </div>
                            </div>
                            <input type="hidden" name="zona_waktu_tambah" id="zona_waktu_tambah" value="">
                        </div>
                        <div>
                            <label for="nama_tempat" class="block mb-2 text-sm font-medium text-gray-900">
                                Nama Tempat
                            </label>
                            <input type="text" name="nama_tempat" id="nama_tempat" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div>
                            <label for="alamat_tempat" class="block mb-2 text-sm font-medium text-gray-900">
                                Alamat Tempat
                            </label>
                            <input type="text" name="alamat_tempat" id="alamat_tempat" class="custom-input"
                                required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div>
                            <label for="link_google_maps" class="block mb-2 text-sm font-medium text-gray-900">
                                Link Google Maps
                            </label>
                            <input type="url" name="link_google_maps" id="link_google_maps" class="custom-input"
                                required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Streaming -->
            <div id="streaming" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Streaming
                </h2>
                <!-- Form Tambah Streaming -->
                <form action="{{ route('user.streaming.store', $invitation->id) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-6">
                        <div>
                            <label for="link_streaming" class="block mb-2 text-sm font-medium text-gray-900">
                                Link Streaming
                            </label>
                            <input type="text" name="link_streaming" id="link_streaming" class="custom-input"
                                value="{{ old('link_streaming', $streaming->link_streaming ?? '') }}" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')"="">
                        </div>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <!-- Button Hapus Streaming -->
                <div class="flex justify-center mt-2">
                    @if (isset($streaming))
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash-alt mr-2"></i>
                            <span class="mr-2">Hapus</span>
                        </button>
                        <!-- Modal Hapus Streaming -->
                        <div id="hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-hapus-streaming-{{ $streaming->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Hapus Streaming
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p>Apakah Anda yakin ingin menghapus link streaming ini?</p>
                                        <div class="flex justify-end mt-4">
                                            <form action="{{ route('user.streaming.destroy', $streaming->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fas fa-trash-alt mr-2"></i>
                                                    <span class="mr-2">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <hr>
            <!-- Galeri -->
            <div id="foto-video" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Foto & Video
                </h2>
                <div class="grid grid-cols-1 gap-10 py-10">
                    <!-- Foto Sampul -->
                    <h2 class="text-xl text-center font-semibold text-gray-900">
                        Foto Sampul
                    </h2>
                    @if ($galeri && $galeri->foto_sampul)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $galeri->foto_sampul)) }}"
                                alt="Foto Sampul"
                                class="w-full max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                                onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $galeri->foto_sampul)) }}')">
                            <button aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                                data-hs-overlay="#hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                                class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                <i class="fas fa-trash-alt mr-2"></i>
                                <span>Hapus</span>
                            </button>
                        </div>
                        <!-- Modal Hapus Sampul -->
                        <div id="hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-hapus-foto-sampul-{{ $galeri->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Hapus Foto Sampul
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p>Apakah Anda yakin ingin menghapus foto sampul ini?</p>
                                        <div class="flex justify-end mt-4">
                                            <form action="{{ route('user.galeri.destroyCoverPhoto', $galeri->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fas fa-trash-alt mr-2"></i>
                                                    <span class="mr-2">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="text-center text-gray-500 my-10">Tidak ada foto sampul yang tersedia</p>
                    @endif
                    <br>
                    <!-- Foto Galeri -->
                    <h2 class="text-xl text-center font-semibold text-gray-900">
                        Foto Galeri
                    </h2>
                    @if ($galeri && $galeri->foto_galeri && !empty(json_decode($galeri->foto_galeri)))
                        <div class="grid grid-cols-2 gap-6">
                            @foreach (json_decode($galeri->foto_galeri) as $index => $foto)
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                        alt="Foto Galeri"
                                        class="w-full h-64 object-cover rounded-lg shadow-md cursor-pointer"
                                        onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')">
                                    <button aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                                        class="mt-4 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        <i class="fas fa-trash-alt mr-2"></i>
                                        <span>Hapus</span>
                                    </button>
                                </div>
                                <!-- Modal Hapus Galeri -->
                                <div id="hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div
                                            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                                <h3 id="hs-scale-animation-modal-label"
                                                    class="font-bold text-gray-800">
                                                    Hapus Foto
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-label="Close"
                                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <p>
                                                    Apakah Anda yakin ingin menghapus foto ini?
                                                </p>
                                                <div class="flex justify-end mt-4">
                                                    <form
                                                        action="{{ route('user.galeri.destroyGalleryPhoto', $galeri->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="index"
                                                            value="{{ $index }}">
                                                        <button type="submit"
                                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            <span class="mr-2">Hapus</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-500 my-10">
                            Tidak ada foto galeri yang tersedia
                        </p>
                    @endif
                    <!-- Modal Foto -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden fixed inset-0 z-50 flex items-center justify-center">
                        <div class="bg-black/80 absolute inset-0"></div>
                        <div class="relative p-4 w-full max-w-2xl max-h-full flex items-center justify-center">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="flex items-center justify-between p-4 border-b rounded-t">
                                    <h3 class="text-xl font-semibold text-gray-900">Foto</h3>
                                    <button type="button"
                                        class="text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        onclick="closeModalFoto()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <div class="px-4 py-2">
                                    <img id="modal-image" class="w-full h-[75vh] object-contain rounded"
                                        src="" alt="Modal Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambah Foto & Video -->
                <h2 class="mt-14 text-xl text-center font-semibold text-gray-900">
                    Tambah Foto & Video
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <!-- Form Upload Foto Sampul -->
                <form action="{{ route('user.galeri.store', $invitation->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="foto_sampul" class="block mb-2 text-sm font-medium text-gray-900">
                            Foto Sampul
                        </label>
                        <input type="file" id="foto_sampul" name="foto_sampul" accept="image/*"
                            class="custom-input" required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <!-- Form Upload Foto Galeri -->
                <br><br>
                <form action="{{ route('user.galeri.storeMultiple', $invitation->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="foto_galeri" class="block mb-2 text-sm font-medium text-gray-900">
                            Foto Galeri
                        </label>
                        <input type="file" id="foto_galeri" name="foto_galeri[]" accept="image/*" multiple
                            class="custom-input" required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                        <p class="mt-1 text-sm text-gray-500">
                            Pilih beberapa foto untuk galeri (max. 6)
                        </p>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <br><br>
                <!-- Form Input URL Video Galeri -->
                <form action="{{ route('user.galeri.storeVideo', $invitation->id) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="video_galeri" class="block mb-2 text-sm font-medium text-gray-900">
                            Video Galeri (Link URL)
                        </label>
                        <input type="url" id="video_galeri" name="video_galeri"
                            placeholder="Masukkan link video (contoh : https://www.youtube.com/embed/example)"
                            class="custom-input" value="{{ old('video_galeri', $galeri->video_galeri ?? '') }}"
                            required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                @if (isset($galeri))
                    <form action="{{ route('user.galeri.destroyVideo', $galeri->id) }}" method="POST"
                        class="flex justify-center mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash-alt mr-2"></i>
                            <span class="mr-2">Hapus</span>
                        </button>
                    </form>
                @endif
            </div>
            <hr>
            <!-- Cerita -->
            <div id="cerita" class="py-8 px-4 mx-auto lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Cerita
                </h2>
                <div class="relative overflow-x-auto overflow-y-auto max-w-3xl shadow-lg mx-auto rounded-lg max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full">
                        <thead class="text-xs text-nowrap text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Judul Cerita</th>
                                <th scope="col" class="px-6 py-4">Isi Cerita</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($cerita->isEmpty())
                                <tr>
                                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada cerita yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($cerita as $data)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">
                                            {{ $data->judul_cerita }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-detail-{{ $data->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-detail-{{ $data->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-book-open mr-1"></i>
                                                <span>Lihat</span>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                                                class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-edit mr-1"></i>
                                                <span>Ubah</span>
                                            </button>
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Detail Cerita -->
                                    <div id="hs-scale-animation-modal-detail-{{ $data->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-detail-{{ $data->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-detail-{{ $data->id }}"
                                                        class="font-bold text-gray-800">
                                                        Isi Cerita
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-detail-{{ $data->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4">
                                                    <p>{{ $data->isi_cerita }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Ubah Cerita -->
                                    <div id="hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-edit-{{ $data->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-edit-cerita{{ $data->id }}"
                                                        class="font-bold text-gray-800">
                                                        Ubah Cerita
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-edit-cerita{{ $data->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <form action="{{ route('user.cerita.update', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="mb-4">
                                                            <label for="edit_judul_cerita" class="block mb-2">Judul
                                                                Cerita</label>
                                                            <input type="text" name="judul_cerita"
                                                                id="edit_judul_cerita" class="custom-input"
                                                                value="{{ $data->judul_cerita }}" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                oninput="this.setCustomValidity('')">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="edit_isi_cerita" class="block mb-2">Isi
                                                                Cerita</label>
                                                            <input type="text" name="isi_cerita"
                                                                id="edit_isi_cerita" class="custom-input"
                                                                value="{{ $data->isi_cerita }}" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                oninput="this.setCustomValidity('')">
                                                        </div>
                                                        <hr>
                                                        <div class="flex justify-end mt-4">
                                                            <button type="submit"
                                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-save mr-2"></i>
                                                                <span class="mr-2">Simpan</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Cerita -->
                                    <div id="hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-cerita-{{ $data->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-hapus-cerita-{{ $data->id }}"
                                                        class="font-bold text-gray-800">
                                                        Hapus Cerita
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-cerita-{{ $data->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <p>
                                                        Apakah Anda yakin ingin menghapus cerita
                                                        <strong class="font-bold">{{ $data->judul_cerita }}</strong>?
                                                    </p>
                                                </div>
                                                <div class="flex justify-end p-4 border-t">
                                                    <form action="{{ route('user.cerita.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            <span class="mr-2">Hapus</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- Tambah Cerita -->
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Tambah Cerita
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('cerita.store', $invitation) }}" method="POST" class="mx-auto max-w-2xl">
                    @csrf
                    <div class="mb-6">
                        <label for="judul-cerita" class="block mb-2 text-sm font-medium text-gray-900">
                            Judul Cerita
                        </label>
                        <input type="text" id="judul-cerita" name="judul_cerita" class="custom-input" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-6">
                        <label for="isi-cerita" class="block mb-2 text-sm font-medium text-gray-900">
                            Isi Cerita
                        </label>
                        <textarea id="isi-cerita" name="isi_cerita" class="custom-input h-32" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Quotes -->
            <div id="quote" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Quote
                </h2>
                <h2 class="py-10 text-xl text-center font-semibold text-gray-900">
                    Contoh Quote
                </h2>
                <!-- Contoh Quote -->
                <div class="mb-6 border rounded-lg p-10 shadow-lg">
                    <p>
                        وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ
                        <br><br>
                        Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah.
                        <br><br>
                        Adz Dzariyyat: 49
                    </p>
                    <div class="flex justify-center mt-4">
                        <button
                            onclick="copyQuote('Adz Dzariyyat: 49', 'وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ\n\nDan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah.')"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            Salin ke Form
                        </button>
                    </div>
                </div>
                <div class="mb-6 border rounded-lg p-10 shadow-lg">
                    <p>
                        وَزَكَرِيَّآ اِذْ نَادٰى رَبَّهٗ رَبِّ لَا تَذَرْنِيْ فَرْدًا وَّاَنْتَ خَيْرُ الْوٰرِثِيْنَ ۚ
                        <br><br>
                        Dan (ingatlah kisah) Zakaria, ketika dia berdoa kepada Tuhannya, “Ya Tuhanku, janganlah Engkau
                        biarkan aku hidup seorang diri (tanpa keturunan) dan Engkaulah ahli waris yang terbaik.
                        <br><br>
                        Al Anbiya: 89
                    </p>
                    <div class="flex justify-center mt-4">
                        <button
                            onclick="copyQuote('Al Anbiya: 89', 'وَزَكَرِيَّآ اِذْ نَادٰى رَبَّهٗ رَبِّ لَا تَذَرْنِيْ فَرْدًا وَّاَنْتَ خَيْرُ الْوٰرِثِيْنَ ۚ\n\nDan (ingatlah kisah) Zakaria, ketika dia berdoa kepada Tuhannya, “Ya Tuhanku, janganlah Engkau biarkan aku hidup seorang diri (tanpa keturunan) dan Engkaulah ahli waris yang terbaik.')"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            Salin ke Form
                        </button>
                    </div>
                </div>
                <div class="mb-6 border rounded-lg p-10 shadow-lg">
                    <p>
                        وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا
                        وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ
                        يَّتَفَكَّرُوْنَ
                        <br><br>
                        Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu
                        sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya diantaramu rasa
                        kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum
                        yang berfikir.
                        <br><br>
                        Ar Rum: 21
                    </p>
                    <div class="flex justify-center mt-4">
                        <button
                            onclick="copyQuote('Ar Rum: 21', 'وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ\n\nDan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.')"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            Salin ke Form
                        </button>
                    </div>
                </div>
                <!-- Tambah Quote -->
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Tambah Quote
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('user.quotes.store', $invitation) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                        <input type="text" id="author" name="author" class="custom-input"
                            value="{{ old('author', $quote->author ?? '') }}" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-6">
                        <label for="quote" class="block mb-2 text-sm font-medium text-gray-900">Quote</label>
                        <textarea id="quoteText" name="quote" class="custom-input h-32" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">{{ old('quote', $quote->quote ?? '') }}</textarea>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <!-- Button Hapus Quote -->
                <div class="flex justify-center mt-2">
                    @if (isset($quote))
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-hapus-quote-{{ $quote->id }}"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-quote-{{ $quote->id }}"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash-alt mr-2"></i>
                            <span class="mr-2">Hapus</span>
                        </button>
                        <!-- Modal Hapus Quote -->
                        <div id="hs-scale-animation-modal-hapus-quote-{{ $quote->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-hapus-quote-{{ $quote->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Hapus Quote
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-quote-{{ $quote->id }}">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p>Apakah Anda yakin ingin menghapus quote ini?</p>
                                        <div class="flex justify-end mt-4">
                                            <form action="{{ route('user.quotes.destroy', $quote->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fas fa-trash-alt mr-2"></i>
                                                    <span class="mr-2">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <hr>
            <!-- Kado Digital -->
            <div id="kado-digital" class="py-8 px-4 mx-auto lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Kado Digital
                </h2>
                <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto rounded-lg max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full">
                        <thead class="text-xs text-nowrap text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Penerima</th>
                                <th scope="col" class="px-6 py-4">Nama Bank</th>
                                <th scope="col" class="px-6 py-4">Nomor Rekening</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($kadodigital->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada kado digital yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($kadodigital as $kd)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">{{ $kd->penerima }}</td>
                                        <td class="px-6 py-4">{{ $kd->nama_bank }}</td>
                                        <td class="px-6 py-4">{{ $kd->no_rekening }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                                class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-edit mr-1"></i>
                                                <span>Ubah</span>
                                            </button>
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Ubah Kado Digital -->
                                    <div id="hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-edit-kado-digital-{{ $kd->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-edit-kado-digital-{{ $kd->id }}"
                                                        class="font-bold text-gray-800">
                                                        Ubah Kado Digital
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <form action="{{ route('user.kadodigital.update', $kd->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="mb-6">
                                                            <label for="penerima"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Penerima
                                                            </label>
                                                            <input type="text" id="penerima" name="penerima"
                                                                class="custom-input" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                oninput="this.setCustomValidity('')"
                                                                value="{{ $kd->penerima }}">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="nama_bank"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Nama Bank
                                                            </label>
                                                            <input type="text" id="nama_bank" name="nama_bank"
                                                                class="custom-input" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                oninput="this.setCustomValidity('')"
                                                                value="{{ $kd->nama_bank }}">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="no_rekening"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Nomor Rekening
                                                            </label>
                                                            <input type="text" id="no_rekening"
                                                                name="no_rekening" class="custom-input" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                                oninput="this.setCustomValidity('')"
                                                                value="{{ $kd->no_rekening }}">
                                                        </div>
                                                        <div class="flex justify-end mt-4">
                                                            <button type="submit"
                                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-save mr-2"></i>
                                                                <span class="mr-2">Simpan</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Kado Digital -->
                                    <div id="hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-kado-digital-{{ $kd->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-hapus-kado-digital-{{ $kd->id }}"
                                                        class="font-bold text-gray-800">
                                                        Hapus Kado Digital
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="p-4">
                                                        <p>
                                                            Apakah Anda yakin ingin menghapus kado digital
                                                            <strong>{{ $kd->penerima }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form
                                                            action="{{ route('user.kadodigital.destroy', $kd->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-trash-alt mr-2"></i>
                                                                <span class="mr-2">Hapus</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- Tambah Kado Digital -->
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Tambah Kado Digital
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('user.kadodigital.store', $invitation->id) }}" method="POST"
                    class="mx-auto max-w-2xl">
                    @csrf
                    <div class="mb-6">
                        <label for="penerima" class="block mb-2 text-sm font-medium text-gray-900">
                            Penerima
                        </label>
                        <input type="text" id="penerima" name="penerima" class="custom-input" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-6">
                        <label for="nama_bank" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Bank
                        </label>
                        <input type="text" id="nama_bank" name="nama_bank" class="custom-input" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-6">
                        <label for="no_rekening" class="block mb-2 text-sm font-medium text-gray-900">
                            Nomor Rekening
                        </label>
                        <input type="text" id="no_rekening" name="no_rekening" class="custom-input" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Musik -->
            <div id="musik" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Musik
                </h2>
                <!-- Form Tambah Musik -->
                <form action="{{ route('user.music.store', $invitation->id) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-6">
                        <div>
                            <label for="music_link" class="block mb-2 text-sm font-medium text-gray-900"> Masukkan
                                Link Musik (URL) </label>
                            <input type="url" name="music_link" id="music_link" class="custom-input"
                                value="{{ old('music', $music->file_path ?? '') }}" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i> <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <!-- Button Hapus Musik -->
                <div class="flex justify-center mt-2">
                    @if (isset($music))
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash-alt mr-2"></i>
                            <span class="mr-2">Hapus</span>
                        </button>
                        <!-- Modal Hapus Musik -->
                        <div id="hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-hapus-music-{{ $music->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Hapus Musik
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-music-{{ $music->id }}">
                                            <span class="sr-only">Close</span>
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <p>Apakah Anda yakin ingin menghapus link musik ini?</p>
                                        <div class="flex justify-end mt-4">
                                            <form action="{{ route('user.music.destroy', $music->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fas fa-trash-alt mr-2"></i>
                                                    <span class="mr-2">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <hr>
            <!-- Tamu -->
            <div id="tamu" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Tamu
                </h2>
                <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto rounded-lg max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full">
                        <thead class="text-xs text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nama Tamu</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tamu as $guest)
                                <tr class="bg-white border-b text-nowrap">
                                    <td class="px-6 py-4">{{ $guest->nama_tamu }}</td>
                                    <td class="px-6 py-4">
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-scale-animation-modal-edit-tamu-{{ $guest->id }}"
                                            data-hs-overlay="#hs-scale-animation-modal-edit-tamu-{{ $guest->id }}"
                                            class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                            <i class="fas fa-edit mr-1"></i><span>Ubah</span>
                                        </button>
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-scale-animation-modal-hapus-tamu-{{ $guest->id }}"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-tamu-{{ $guest->id }}"
                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                            <i class="fas fa-trash-alt mr-1"></i><span>Hapus</span>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal Ubah Tamu -->
                                <div id="hs-scale-animation-modal-edit-tamu-{{ $guest->id }}"
                                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-scale-animation-modal-label-edit-tamu-{{ $guest->id }}">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div
                                            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                                <h3 id="hs-scale-animation-modal-label-edit-tamu-{{ $guest->id }}"
                                                    class="font-bold text-gray-800">
                                                    Ubah Tamu
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-label="Close"
                                                    data-hs-overlay="#hs-scale-animation-modal-edit-tamu-{{ $guest->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('user.tamu.update', $guest->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="p-4">
                                                    <label for="nama_tamu_{{ $guest->id }}"
                                                        class="block text-sm font-medium text-gray-700">
                                                        Nama Tamu
                                                    </label>
                                                    <input type="text" id="nama_tamu_{{ $guest->id }}"
                                                        name="nama_tamu" class="custom-input"
                                                        value="{{ $guest->nama_tamu }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="flex justify-end p-4 border-t">
                                                    <button type="submit"
                                                        class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-4 rounded">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hapus Tamu -->
                                <div id="hs-scale-animation-modal-hapus-tamu-{{ $guest->id }}"
                                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-scale-animation-modal-label-hapus-tamu-{{ $guest->id }}">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div
                                            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                                <h3 id="hs-scale-animation-modal-label"
                                                    class="font-bold text-gray-800">
                                                    Hapus Tamu
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-label="Close"
                                                    data-hs-overlay="#hs-scale-animation-modal-hapus-tamu-{{ $guest->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <div class="p-4">
                                                    <p>
                                                        Apakah Anda yakin ingin menghapus tamu
                                                        <strong>{{ $guest->nama_tamu }}</strong>?
                                                    </p>
                                                </div>
                                                <div class="flex justify-end mt-4">
                                                    <form action="{{ route('user.tamu.destroy', $guest->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            <span class="mr-2">Hapus</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Tambah Tamu -->
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Tambah Tamu
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('user.tamu.store', ['invitation' => $invitation->id]) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="nama_tamu" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Tamu
                        </label>
                        <input type="text" id="nama_tamu" name="nama_tamu" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')" class="custom-input">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Ucapan & Doa -->
            <div id="ucapan-doa" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Ucapan & Doa
                </h2>
                <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto rounded-lg max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full">
                        <thead class="text-xs text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nama</th>
                                <th scope="col" class="px-6 py-4">Ucapan</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comment as $c)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 text-nowrap">{{ $c->name }}</td>
                                    <td class="px-6 py-4">
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                            data-hs-overlay="#hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <i class="fa-solid fa-comment-dots mr-1"></i>
                                            <span>Lihat</span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 text-nowrap">
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                            <i class="fas fa-trash-alt mr-1"></i><span>Hapus</span>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal Ucapan -->
                                <div id="hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-scale-animation-modal-label-ucapan-{{ $c->id }}">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div
                                            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                                <h3 id="hs-scale-animation-modal-label-ucapan-{{ $c->id }}"
                                                    class="font-bold text-gray-800">
                                                    Ucapan
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-label="Close"
                                                    data-hs-overlay="#hs-scale-animation-modal-ucapan-{{ $c->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-4">
                                                <p>{{ $c->message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hapus Ucapan -->
                                <div id="hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="hs-scale-animation-modal-label-hapus-ucapan-{{ $c->id }}">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                        <div
                                            class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                                <h3 id="hs-scale-animation-modal-label"
                                                    class="font-bold text-gray-800">
                                                    Hapus Ucapan
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                    aria-label="Close"
                                                    data-hs-overlay="#hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <div class="p-4">
                                                    <p>
                                                        Apakah Anda yakin ingin menghapus ucapan
                                                        <strong>{{ $c->name }}</strong>?
                                                    </p>
                                                </div>
                                                <div class="flex justify-end mt-4">
                                                    <form action="{{ route('comments.destroy', $c->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            <span class="mr-2">Hapus</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
                    Setting Ucapan & Doa
                </h2>
                <hr class="my-5 mx-auto max-w-2xl">
                <form action="{{ route('comments.toggleStatus', $invitation->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" id="comments_enabled" name="comments_enabled"
                                class="form-checkbox h-5 w-5 text-gray-800 focus:ring-0 border-2 border-gray-300 focus:border-gray-800"
                                value="1" {{ $invitation->comments_enabled ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Aktifkan Ucapan & Doa</span>
                        </label>
                    </div>
                    <p class="mb-6 block text-sm font-medium text-red-500">
                        Orang lain yang memiliki link undanganmu akan bisa berkomentar.
                        Mohon dipertimbangkan, bisa saja orang tak diundang dapat berkomentar tidak baik.
                    </p>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- Tema -->
            <div id="tema" class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
                    Tema
                </h2>
                <form action="{{ route('user.invitation.update', $invitation) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-6">
                        <label for="title" class="block text-gray-700">
                            Judul Undangan
                        </label>
                        <input type="text" id="title" name="title" required
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')" value="{{ $invitation->title }}"
                            class="mt-1 custom-input">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            <span class="mr-2">Simpan</span>
                        </button>
                    </div>
                </form>
                <br>
                <div class="mb-6">
                    <label for="tema" class="block text-gray-700">
                        Tema
                    </label>
                    <input type="text" id="tema" name="tema" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')" value="{{ $invitation->theme->name }}"
                        class="mt-1 custom-input" disabled>
                </div>
                <h2 class="mt-10 py-8 text-2xl text-center font-bold font-croissant text-gray-900">
                    Daftar Tema
                </h2>
                <div class="flex flex-col items-center">
                    <div class="max-w-[300px] rounded-lg overflow-hidden shadow-lg border bg-white">
                        <img src="{{ asset($invitation->theme->path . '/' . $invitation->theme->thumbnail) }}"
                            alt="{{ $invitation->theme->name }}"
                            class="w-[250px] h-[400px] object-cover mx-auto mt-4">
                        <div class="px-6 py-4">
                            <div class="font-bold font-croissant text-xl mb-2 text-center">
                                {{ $invitation->theme->name }}
                            </div>
                        </div>
                        <div class="flex justify-center space-x-2 pb-4 px-6">
                            <a href="{{ route('demo.theme', ['slug' => $invitation->theme->slug]) }}"
                                target="_blank"
                                class="bg-green-500 hover:bg-green-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                <i class="fas fa-eye mr-2"></i>
                                <span class="mr-2">Demo</span>
                            </a>
                            <button
                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                <i class="fas fa-check mr-2"></i>
                                <span class="mr-2">Pilih</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Tombol Preview -->
            <div class="flex justify-center my-5">
                <a href="{{ route('user.invitation.show', $invitation->slug) }}" target="_blank"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                    <i class="fa-solid fa-envelope-open mr-2"></i>
                    <span class="mr-2">Preview</span>
                </a>
            </div>
            <!-- Tombol Kembali -->
            <div class="flex items-center justify-center">
                <button type="button"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center"
                    onclick="history.back()">
                    <i class="fas fa-arrow-left mr-2"></i>
                    <span class="mr-2">Kembali</span>
                </button>
            </div>
        </section>
    </div>
</x-app-layout>
