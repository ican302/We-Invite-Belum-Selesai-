<div id="acara" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Acara
    </h2>
    <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto max-h-80">
        <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
            <thead class="text-nowrap text-white bg-gray-800">
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
            <tbody class="bg-white">
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
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($data->jam_mulai)->format('H:i') }}</td>
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($data->jam_selesai)->format('H:i') }}</td>
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
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Ubah Acara
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-{{ $data->id }}">
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
                                        <form action="{{ route('user.acara.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div class="mb-4">
                                                    <label for="edit_nama_acara" class="block mb-2">
                                                        Nama Acara
                                                    </label>
                                                    <input type="text" name="nama_acara" id="edit_nama_acara"
                                                        class="custom-input" value="{{ $data->nama_acara }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="edit_tanggal_acara" class="block mb-2">
                                                        Tanggal Acara
                                                    </label>
                                                    <input type="date" name="tanggal_acara" id="edit_tanggal_acara"
                                                        class="custom-input" value="{{ $data->tanggal_acara }}"
                                                        required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="edit_jam_mulai" class="block mb-2">
                                                        Jam Mulai
                                                    </label>
                                                    <input type="time" name="jam_mulai" id="edit_jam_mulai"
                                                        class="custom-input" value="{{ $data->jam_mulai }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="edit_jam_selesai" class="block mb-2">
                                                        Jam Selesai
                                                    </label>
                                                    <input type="time" name="jam_selesai" id="edit_jam_selesai"
                                                        class="custom-input" value="{{ $data->jam_selesai }}"
                                                        required
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
                                                    <input type="text" name="nama_tempat" id="edit_nama_tempat"
                                                        class="custom-input" value="{{ $data->nama_tempat }}"
                                                        required
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
                                                        oninvalid="validateURLInput(this)"
                                                        oninput="setCustomValidity('')">
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
                                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                            Hapus Acara
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-{{ $data->id }}">
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
        @if ($acara->hasPages())
            <div class="p-3">
                {{ $acara->appends(request()->except('acara_page'))->fragment('acara')->links() }}
            </div>
        @endif
    </div>
    <!-- Tambah Acara -->
    <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
        Tambah Acara
    </h2>
    <hr class="my-5 mx-auto max-w-3xl border-t border-gray-800">
    <form action="{{ route('user.acara.store', $invitation->id) }}" method="POST">
        @csrf
        <div class="grid gap-4 mb-6">
            <div>
                <label for="nama_acara" class="block mb-2 text-sm font-medium text-gray-900">
                    Nama Acara
                </label>
                <input type="text" name="nama_acara" id="nama_acara" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div>
                <label for="tanggal_acara" class="block mb-2 text-sm font-medium text-gray-900">
                    Tanggal Acara
                </label>
                <input type="date" name="tanggal_acara" id="tanggal_acara" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div>
                <label for="jam_mulai" class="block mb-2 text-sm font-medium text-gray-900">
                    Jam Mulai
                </label>
                <input type="time" name="jam_mulai" id="jam_mulai" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div>
                <label for="jam_selesai" class="block mb-2 text-sm font-medium text-gray-900">
                    Jam Selesai
                </label>
                <input type="time" name="jam_selesai" id="jam_selesai" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
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
                        onclick="selectOption('WIB', 'dropdownButtonTambah', 'zona_waktu_tambah')">
                        WIB
                    </div>
                    <div class="dropdown-item"
                        onclick="selectOption('WITA', 'dropdownButtonTambah', 'zona_waktu_tambah')">
                        WITA
                    </div>
                    <div class="rounded-b-lg dropdown-item"
                        onclick="selectOption('WIT', 'dropdownButtonTambah', 'zona_waktu_tambah')">
                        WIT
                    </div>
                </div>
                <input type="hidden" name="zona_waktu_tambah" id="zona_waktu_tambah" value="">
            </div>
            <div>
                <label for="nama_tempat" class="block mb-2 text-sm font-medium text-gray-900">
                    Nama Tempat
                </label>
                <input type="text" name="nama_tempat" id="nama_tempat" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div>
                <label for="alamat_tempat" class="block mb-2 text-sm font-medium text-gray-900">
                    Alamat Tempat
                </label>
                <input type="text" name="alamat_tempat" id="alamat_tempat" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div>
                <label for="link_google_maps" class="block mb-2 text-sm font-medium text-gray-900">
                    Link Google Maps
                </label>
                <input type="url" name="link_google_maps" id="link_google_maps" class="custom-input" required
                    oninvalid="validateURLInput(this)" oninput="setCustomValidity('')">
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
